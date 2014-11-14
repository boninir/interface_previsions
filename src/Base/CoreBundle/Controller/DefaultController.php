<?php

namespace Base\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Base\CoreBundle\Entity\Contact;
use Base\CoreBundle\Form\ContactType;

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
        $contact = new Contact();
        $form = $this->get('form.factory')->create(new ContactType(), $contact);

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {

            if ($form->isValid()) {
                return $this->redirect($this->generateUrl('prevision'));
                $message = \Swift_Message::newInstance()
                    ->setSubject('Repport de bug - Interface de prévision')
                    ->setFrom('interface_prevision@maiaeolis.fr')
                    ->setTo($this->container->getParameter('base_core.emails.contact_email'))
                    ->setBody('mail de test');
                    // ->setBody($this->renderView('BaseCoreBundle:Page:contactEmail.txt.twig', array('contact' => $contact)));
                $this->get('mailer')->send($message);

                $this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('prevision'));
            }
        }

        return $this->render('BaseCoreBundle:Core:bug.html.twig', array( 'form' => $form->createView()));
    }
}
