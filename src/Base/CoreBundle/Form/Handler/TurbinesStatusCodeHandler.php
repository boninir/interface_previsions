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
	        $this->onSuccess($data);

	        return true;
	    }

	    return false;
    }

    protected function onSuccess($data)
    {
        var_dump($data);exit;

        $dateBegin = $data["exportBegin"];
        $dateEnd = $data["exportEnd"];
        $arrayId = $data["arrayId"];
        
        $tabResultStatusCode = $statusCodeServices->getStatusCodesRequest($dateBegin, $dateEnd, $arrayId);
        echo $tabResultStatusCode;exit;
    }
}