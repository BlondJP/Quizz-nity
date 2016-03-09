<?php

namespace AppBundle\Util;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;

class DefaultControllerTest extends WebTestCase{

	private $em;

	
	// Inscription Test

    public function testShow(){
    	// $client = static::createClient();
    	// $crawler = $client->request('GET', '/');

    	// $this->em = self::$kernel->getContainer()->get('doctrine');

    	// $form = $crawler->selectButton("S'inscrire")->form(array('user[username]' => 'testD', 'user[email]' => 'testDyahoo.fr', 'user[plainPassword][first]' => 'testD', 'user[plainPassword][second]' => 'testD'));

    	// $client->submit($form);

    	// $repository=$this->em->getRepository('AppBundle:User');
    	// // $userArray = $repository->findUser('testC','testC');
    	//  $userArray = $repository->findAll();
    	//  $this->assertEquals(count($userArray), 12);

    }

    // Connexion Test

    public function test_bisShow(){
    	
    	$client = static::createClient(); 
    	$crawler = $client->request('GET','sign-in');

    	$this->em = self::$kernel->getContainer()->get('doctrine');

    	$form = $crawler->selectButton("Se connecter !")->form(array('_username' => 'testD', '_password' => 'testD'));

    	$client->submit($form);

    	$crawler = $client->request('GET','quiz-to-choose');

    	$repository=$this->em->getRepository('AppBundle:User');



    }
}
    