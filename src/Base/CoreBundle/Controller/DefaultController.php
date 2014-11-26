<?php

namespace Base\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Base\CoreBundle\Entity\Contact;
use Base\CoreBundle\Form\ContactType;
use Base\CoreBundle\Form\StatusCodeType;
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
        //récupération du service status code
        $statusCodeServices = $this->container->get('base_core.statusCodeService');

        // récupération des valeurs à ajouter à la vue
        $statuscode = $statusCodeServices->getStatusCodes();
        $form = $this->get('form.factory')->create(new StatusCodeType());

        if ($form->handleRequest($request)->isValid()) {
            // récupération des données envoyées par le formulaire
            $data = $form->getData();

            $dateBegin = $data["exportBegin"];
            $dateEnd = $data["exportEnd"];
            $arrayId = $data["arrayId"];
            
            $tabResultStatusCode = $statusCodeServices->getStatusCodesRequest($dateBegin, $dateEnd, $arrayId);
            echo $tabResultStatusCode;exit;
        }

        return $this->render('BaseCoreBundle:Core:statuscode.html.twig', array( 'statusCodes' => $statuscode,
                                                                                'form' => $form->createView()));
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
