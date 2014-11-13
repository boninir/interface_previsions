<?php

namespace Base\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

    public function statuscodeAction()
    {
        return $this->render('BaseCoreBundle:Core:statuscode.html.twig');
    }

    public function erreurAction()
    {
        return $this->render('BaseCoreBundle:Core:erreur.html.twig');
    }

    public function bugAction()
    {
        return $this->render('BaseCoreBundle:Core:bug.html.twig');
    }
}
