<?php

namespace Base\CoreBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * The ContactHandler.
 * Use for manage your form submitions
 *
 * @author Raphael Bonini
 */
class ContactHandler
{
	protected $request;
    protected $form;
    protected $mailer;

    /**
     *
     * @param Form $form
     * @param Request $request
     * @param $mailer
     * 
     */
    public function __construct(Form $form, Request $request, $mailer)
    {
        $this->form = $form;
        $this->request = $request;
        $this->mailer = $mailer;
    }

    public function process()
    {
	    if ('POST' == $this->request->getMethod())
	    {
	        $this->form->bind($this->request);

	        $data = $this->form->getData();
	        $this->onSuccess($data);

	        return true;
	    }

	    return false;
    }

    protected function onSuccess($data)
    {
    	$message = \Swift_Message::newInstance()
                    ->setContentType('text/html')
                    ->setSubject($data['subject'])
                    ->setFrom('bug-interface_prevision@maiaeolis.fr')
                    ->setTo('rbonini@maiaeolis.fr')
                    ->setBody($data['body']);

        $this->mailer->send($message);
    }
}