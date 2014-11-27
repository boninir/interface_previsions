<?php

namespace Base\CoreBundle\Services;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;


class MenuService
{

	public function __construct(EntityManager $em)
    {
        $this->_em = $em;
    }

    public function getMenuSelect(){

    	$tabMenu = array();

        return $tabMenu;
    }
}
