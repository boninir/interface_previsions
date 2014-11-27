<?php

namespace Base\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Base\CoreBundle\Entity\Turbine;
use Base\CoreBundle\Form\TurbineType;

class MenuController extends Controller
{
    public function menuAction()
    {
        //récupération de l'entity manager
        $repository = $this->getDoctrine()->getManager();

        $turbine = new Turbine();
        $form = $this->get('form.factory')->create(new TurbineType(), $turbine);

        // récupération de la liste des parcs et de leurs turbines
        $parcs = $repository->getRepository('BaseCoreBundle:WindFarm')
                            ->getWindFarmsAndTurbines();

        return $this->render('BaseCoreBundle:Core:menu.html.twig', array( 'parcs' => $parcs,
        																  'form' => $form->createview()));
    }
}
