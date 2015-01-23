<?php

namespace Base\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Base\CoreBundle\Form\ContactType;
use Base\CoreBundle\Form\Handler\ContactHandler;
use Base\CoreBundle\Form\TurbineStatusCodeType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BaseCoreBundle:Core:content.html.twig');
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

        //////////////
        //affichage //
        //////////////

        // récupération de la liste des parcs et de leurs turbines
        $parcs = $repository->getRepository('BaseCoreBundle:WindFarm')
                            ->getWindFarmsAndTurbines();

        // récupération de la liste de stat(filename)tus code triée
        $statusCodes = $repository->getRepository('BaseCoreBundle:StatusCode')
                                  ->findBy(array(),array('id' => 'asc'));

        // récupération des valeurs à ajouter à la vue
        // $statuscode = $statusCodeServices->getStatusCodes();
        $form = $this->get('form.factory')->create(new TurbineStatusCodeType());
        $windfarm = $form["windfarms"]->getData();
        // echo $form["windfarms"][0]["id"];exit();

        if ($form->handleRequest($request)->isValid()) {
            // récupération des données envoyées par le formulaire
            $data = $form->getData();
            var_dump($data);exit;

            $dateBegin = $data["exportBegin"];
            $dateEnd = $data["exportEnd"];
            $arrayId = $data["arrayId"];
            
            $tabResultStatusCode = $statusCodeServices->getStatusCodesRequest($dateBegin, $dateEnd, $arrayId);
            echo $tabResultStatusCode;exit;
        }

        return $this->render('BaseCoreBundle:Core:statuscode.html.twig', array( 'statusCodes' => $statusCodes,
                                                                                'form' => $form->createView(),
                                                                                'parcs' => $parcs,
                                                                                'windfarm' => $windfarm));
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
