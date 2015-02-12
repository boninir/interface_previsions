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
class TurbinesStatusCodeHandler
{
	protected $request;
    protected $form;

    /**
     *
     * @param Form $form
     * @param Request $request
     * 
     */
    public function __construct(Form $form, Request $request)
    {
        $this->form = $form;
        $this->request = $request;
    }

    public function process()
    {
	    if ('POST' == $this->request->getMethod())
	    {
	        $this->form->bind($this->request);

            $data = $this->form->getData();

            $retour = $this->onSuccess($data);

	        return $retour;
	    }

	    return false;
    }

    protected function onSuccess($data)
    {

        $dateBegin = $data["exportBegin"];
        $dateEnd = $data["exportEnd"];
        $arrayId = $data["arrayId"];
        // $turbines = $data["id"]->toArray();

        $paramRequest = array($dateBegin, $dateEnd, $arrayId);
        
        return $paramRequest;
    }
}