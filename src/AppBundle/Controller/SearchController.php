<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller {

    /**
     * @Route("/quiz/search", name="search-quiz")
     */
    public function indexAction(Request $request) {
        $form = $this->createFormBuilder()
                ->add('textToSearch', new TextType(), array(
                    'label' => 'Nom du quiz',
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
                ->add('Rechercher', new SubmitType(), array(
                    'attr' => array(
                        'class' => 'btn btn-danger col-lg-offset-5'
                    ))
                )
                ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            # Instanciation de l'EM
            $em = $this->getDoctrine()->getManager();

            # recupération de la data
            $data = $form->getData();

            if (isset($data['textToSearch']) && strlen($data['textToSearch'])) {
                # Cas ou l'on a reçu les infos comme on les voulait
                $textToSearch = $data['textToSearch'];

                $quizRepository = $this->get('doctrine')->getRepository('AppBundle:Quiz');
                $allQuiz = $quizRepository->getQuizBySegment($textToSearch);
            }
        } else {
            $allQuiz = array();
        }

        $content = $this->render('AppBundle:default:search.html.twig', array(
            'quizs' => $allQuiz,
            'form' => $form->createView()
                )
        );

        return new Response($content);
    }

}
