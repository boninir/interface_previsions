<?php

namespace Base\CoreBundle\Services;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;


class TurbineStatusCodeService
{

	public function __construct(EntityManager $em)
    {
        $this->_em = $em;
    }

    /**
	 * executeStatusCodesRequest
	 *
	 * Fonction permettant de récupérer la liste des status code triés
	 * par id.
	 */
    public function executeStatusCodesRequest($paramRequest){

        $repository = $this->_em->getRepository('BaseCoreBundle:TurbineStatusCode');

        // execution de la requete
        $statusCodes = $repository->getStatusCodeTurbine($paramRequest);

        return $statusCodes;
    }
}
