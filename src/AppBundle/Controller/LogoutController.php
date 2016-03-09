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


class LogoutController extends Controller{
    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request) {

        return $this->render('AppBundle:default:signIn.html.twig');
    }
}