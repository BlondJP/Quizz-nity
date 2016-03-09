<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * QuestionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */


/* Pour l'utiliser dans le controller écriver ceci*/
/*
 * # Récupération des 5 questions
        $questionRepository = $this->get('doctrine')->getRepository('AppBundle:Question');
        $questions = $questionRepository->get5QuestionsOfAQuiz(2);
 *
 * */

class QuestionRepository extends EntityRepository
{
    # This function is created to be sure # We don't have twice the sae random index
    private function isIndexExist($index, $indexArray)
    {
        foreach ($indexArray as $indexItem)
        {
            if ($index == $indexItem)
                return TRUE;
        }
        return FALSE;
    }

    public function find5RandomQuestionsByQuiz($quiz_id)
    {
        $allQuestionsOfAQuiz = $this->findByQuiz($quiz_id);
        
        if (count($allQuestionsOfAQuiz) > 9)
        {
            # Case we have enough question # must have 10+
            $indexArray = [];
            while (count($indexArray) < 5)
            {
                $randomIndex = rand(0, 9);
                if ($this->isIndexExist($randomIndex, $indexArray) === FALSE)
                    array_push($indexArray, $randomIndex);
            }
            $fiveQuestions = [];
            foreach ($indexArray as $index)
            {
                $fiveQuestions[] = $allQuestionsOfAQuiz[$index];
            }
            return $fiveQuestions;
        }
        else
        {
        }
    }

}
