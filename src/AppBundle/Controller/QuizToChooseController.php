<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuizToChooseController extends Controller {

    /**
     * @Route("/quiz/quiz-to-choose", name="quiz-to-choose")
     */
    public function quizToChooseAction(Request $request) {
        $games = $this->getDoctrine()->getRepository('AppBundle:Gameplay')->getThreeBestGames(1);

        $query = $this->getDoctrine()->getRepository('AppBundle:Quiz')->findQueryForAll();
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $request->query->getInt('page', 1), /* page number */
                2 /* limit per page */
        );

        // parameters to template
        return $this->render('AppBundle:default:quizToChoose.html.twig', array('pagination' => $pagination, 'game' => $games));
    }

}
