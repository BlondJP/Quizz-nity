<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Post;
use AppBundle\Entity\User;
use AppBundle\Form\UserType2;
use AppBundle\Repository\UserRepository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\QueryBuilder;


class SignInController extends Controller{
    /**
     * @Route("/sign-in", name="sign-in")
     */
    public function authentificationAction(Request $request) {
        $user = new User();
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        return $this->render('AppBundle:default:signIn.html.twig', ['error' => $error]);
    }


    /**
     * @Route("/logout", name="logout")
     */
    public function userLogoutAction(Request $request) {
        
      
    }


}