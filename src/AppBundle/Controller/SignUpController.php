<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Post;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

class SignUpController extends Controller{
  

  	/**
     * @Route("/", name="sign-up")
     */

  public function registerAction(Request $request){
        // build the form
        $user = new User();
        $userType = new UserType();
        $form = $this->createForm($userType, $user);

        // handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //  Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                			 ->encodePassword($user, $user->getPlainPassword());

            $user->setPassword($password);
            $user->setPlainPassword('');

            // save the User in user table

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like send them an email, etc
            // maybe set a "flash" success message for the user

            $this->addFlash('info', ' Register successfully.');
            return $this->redirectToRoute('quiz-to-choose'); 
        }

        $content = $this->render('AppBundle:default:signUp.html.twig',array('form' => $form->createView()));
        return new Response($content);
    }


    // for sending email 
    public function indexAction($name){
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody(
                $this->renderView('AppBundle:default:email.html.twig',array('name' => $name)),'text/html');
        $this->get('mailer')->send($message);

       //return $this->render(...);
    }
 
}