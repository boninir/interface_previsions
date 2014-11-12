<?php

namespace Base\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BaseCoreBundle:Default:index.html.twig');
    }
}
