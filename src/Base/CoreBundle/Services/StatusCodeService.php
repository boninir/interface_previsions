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

    /**
	 * getStatusCodesSorted
	 *
	 * Fonction permettant de récupérer la liste des status code triés
	 * par id.
	 */
    public function getStatusCodesSorted(){

        // récupération de la liste des status code
    	$repository = $this->_em->getRepository('BaseCoreBundle:StatusCode');
    	$statusCodes = $repository->getStatusCodes();

        // reformat des ids (suppression du "R-") et tri des status codes (par id)
        $total = count($statusCodes);

        for ($i=0; $i < $total; $i++) {

            $id = explode("-", $statusCodes[$i]['id']);
            $statusCodes[$i]['id'] = $id[1];
        }
        
        return $statusCodes;
    }

    public function getStatusCodesRequest($dateBegin, $dateEnd, $arrayId){

        echo 'je suis bien passé';exit();
        return $arrayId;
    }
}
