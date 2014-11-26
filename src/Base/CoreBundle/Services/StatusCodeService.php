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

    public function getStatusCodesRequest($dateBegin, $dateEnd, $arrayId){


        return $arrayId;
    }
}
