<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GameplayController extends Controller {

    /**
     * @Route("/gameplay/my-gameplays", name="gameplay-score")
     */
    public function scoresAction(Request $request) {
        $games = $this->getDoctrine()->getRepository('AppBundle:Gameplay')->getAllGamesOfAUser($this->getUser());

        $content = $this->render('AppBundle:default:scores.html.twig', array(
            'games' => $games
                )
        );

        return new Response($content);
    }

    /**
     * @Route("/gameplay/bests-scores", name="bests-scores")
     */
    public function bestsScoresAction(Request $request) {
        $quizs = $this->getDoctrine()->getRepository('AppBundle:Quiz')->findAll();
        
        $content = $this->render('AppBundle:default:bestsScores.html.twig', array(
            'quizs' => $quizs
                )
        );

        return new Response($content);
    }

}
