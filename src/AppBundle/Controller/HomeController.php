<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Post;

class HomeController extends Controller{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function indexAction(Request $request) {
        $url = "url"; 
        $templating = $this->get('templating'); 
        $content = $templating->render('AppBundle:homepage.html.twig', array('url' => $url));
        return new Response($content);
    }
    
  
}

