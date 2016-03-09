<?php

namespace Tests\AppBundle\Util;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Util\Connexion;
use AppBundle\Entity\User;



class ConnexionTest extends \PHPUnit_Framework_TestCase {
	public function testConnexionAction() {
		$connect = new Connexion();

		
        // Connexion test 

        $result=$connect->ConnexionAction();
		$this->assertEquals('testC testC', $result);
	}
}

