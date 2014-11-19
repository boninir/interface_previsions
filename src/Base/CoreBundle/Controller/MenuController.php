<?php

namespace Base\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Base\CoreBundle\Entity\Contact;
use Base\CoreBundle\Form\ContactType;

class MenuController extends Controller
{
    public function menuAction()
    {
        //récupération de l'entity manager
        $em = $this->getDoctrine()->getManager();

        $parcs = $em->getRepository('BaseCoreBundle:WindFarm')->findAll();

        // $turbines = $parcs->getTurbines();

        // echo $turbines;

        return $this->render('BaseCoreBundle:Core:menu.html.twig', array( 'parcs' => $parcs));
    }
}
