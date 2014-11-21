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
        $repository = $this->getDoctrine()->getManager();

        $parcs = $repository->getRepository('BaseCoreBundle:WindFarm')->getWindFarmsAndTurbines();

        // var_dump($parcs[0]['turbines'][0]['alias']);exit;

        return $this->render('BaseCoreBundle:Core:menu.html.twig', array( 'parcs' => $parcs));
    }
}
