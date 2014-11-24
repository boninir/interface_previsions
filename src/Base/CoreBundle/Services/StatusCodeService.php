<?php

namespace Base\CoreBundle\Services;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class StatusCodeService
{

	public function __construct(EntityManager $em)
    {
        $this->_em = $em;
    }

    public function getStatusCodes()
    {
    	$tabStatusCodes[] = array();
    	
    	// récupération de la liste de status code triée
    	$statusCodes = $this->_em->getRepository('BaseCoreBundle:StatusCode')
    							 ->findBy(array(),array('id' => 'asc'));

    	// formatage de l'id (suppression du "R-")
    	foreach ($statusCodes as $key => $statusCode) {
    		$newId = explode("-", $statusCode->getId());
    		$tabStatusCodes[$key] = array($newId[1],$statusCode->getName());
    	}

        return $tabStatusCodes;
    }
}
