<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Answer;

class FinalQuizController extends Controller {

    /**
     * @Route("/quiz/quiz-end", name="quiz-end")
     */
    public function quizEndAction(Request $request) {

        $answers = $this->get('request')->request->all();
        if (isset($answers) && count($answers) == 6) {
            $gameplayId = $answers['gameplayId'];
            $gameplayRepository = $this->getDoctrine()->getRepository('AppBundle:Gameplay');

            $gameplay = $gameplayRepository->findOneById($gameplayId);
            unset($answers['gameplayId']);
            $user = $this->getUser();

            $score = 0;
            foreach ($answers as $key => $answer) {
                $question = $this->getDoctrine()->getRepository('AppBundle:Question')->findOneById($key);

                $response = new Answer();
                $response->setUser($user);
                $response->setQuestion($question);
                $response->setGameplay($gameplay);
                $isGood = strcmp($question->getGoodAnswer(), $answer) === 0;

                $response->setIsGood($isGood);
                # ecriture en bdd
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($response);
                $em->flush();
                
                if ($isGood) {
                    # Case answer id right
                    $score++;
                }
            }
            $gameplayRepository->writeScore($gameplayId, $score);
            $gameplayRepository->endGame($gameplayId);
        }

        $url = "url";
        $content = $this->render('AppBundle:default:quizEnd.html.twig', array('url' => $url));
        return new Response($content);
    }

}
