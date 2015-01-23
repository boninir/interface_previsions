<?php

namespace Base\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Base\CoreBundle\Form\ContactType;
use Base\CoreBundle\Form\WindFarmType;
use Base\CoreBundle\Form\Handler\ContactHandler;
use Base\CoreBundle\Form\Handler\TurbinesStatusCodeHandler;
use Base\CoreBundle\Form\TurbineStatusCodeType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // récupération des valeurs à ajouter à la vue
        $form = $this->get('form.factory')->create(new WindFarmType());


        return $this->render('BaseCoreBundle:Core:content.html.twig', array('form' => $form->createView()));
    }

    public function meteoAction()
    {
        return $this->render('BaseCoreBundle:Core:meteo.html.twig');
    }

    public function statuscodeAction(Request $request)
    {
        ///////////////////////////////////////////////
        //récupération des services et des repository//
        ///////////////////////////////////////////////

        $statusCodeServices = $this->container->get('base_core.statusCodeService');
        $menuServices = $this->container->get('base_core.menuService');
        $repository = $this->getDoctrine()->getManager();

        /////////////////////////////
        //récupération des données //
        /////////////////////////////

        // récupération de la liste des parcs et de leurs turbines
        $parcs = $repository->getRepository('BaseCoreBundle:WindFarm')
                            ->getWindFarmsAndTurbines();

        // récupération de la liste de status code triée
        $statusCodes = $repository->getRepository('BaseCoreBundle:StatusCode')
                                  ->findBy(array(),array('id' => 'asc'));

        // récupération des valeurs à ajouter à la vue
        $form = $this->get('form.factory')->create(new TurbineStatusCodeType());

        // récupération des valeurs renvoyées par la vue
        $request = $this->getRequest();
        $formHandler = new TurbinesStatusCodeHandler($form, $request);

        // traitement du formulaire
        $process = $formHandler->process();

        if ($process)
        {
            $this->get('session')->getFlashBag()->add('notice', 'Merci de nous avoir contacté, nous répondrons à vos questions dans les plus brefs délais.');
        }

        return $this->render('BaseCoreBundle:Core:statuscode.html.twig', array( 'statusCodes' => $statusCodes,
                                                                                'form' => $form->createView(),
                                                                                'parcs' => $parcs)
        );
    }

    public function erreurAction()
    {
        return $this->render('BaseCoreBundle:Core:erreur.html.twig');
    }

    public function bugAction()
    {
        $form = $this->get('form.factory')->create(new ContactType());
        $request = $this->getRequest();
        $formHandler = new ContactHandler($form, $request, $this->get('mailer'));

        $process = $formHandler->process();

        if ($process)
        {
            $this->get('session')->getFlashBag()->add('notice', 'Merci de nous avoir contacté, nous répondrons à vos questions dans les plus brefs délais.');
        }

        return $this->render('BaseCoreBundle:Core:bug.html.twig', array( 'form' => $form->createView()));
    }
}
