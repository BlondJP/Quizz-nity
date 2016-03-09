<?php

namespace AppBundle\Util;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;

class Connexion{
	public function ConnexionAction(){
        $user = new User();
        $authenticationUtils = $this->get('security.authentication_utils');
 
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        return $this->render('AppBundle:default:signIn.html.twig', ['error' => $error]);
    }
}
    