<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Quiz;
use AppBundle\Entity\Question;

class LoadQuizFixture implements FixtureInterface {

    function load(ObjectManager $manager) {
        
        // Quiz Disney
        $quizDisney = new Quiz();
        $quizDisney->setNom('Films Disney');
        
        $question = new Question();
        $question->setQuestion('Comment s\'appelle le frère de Wendy qui a des lunettes ?');
        $question->setAnswer1('Mickael');
        $question->setAnswer2('John');
        $question->setAnswer3('Peter');
        $question->setAnswer4('Tintin');
        $question->setGoodAnswer('John');
        $question->setQuiz($quizDisney);
        $quizDisney->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Quel est le nom de l\'ami éléphant de Tarzan ?');
        $question->setAnswer1('Jane');
        $question->setAnswer2('Clayton');
        $question->setAnswer3('Tantor');
        $question->setAnswer4('Tokina');
        $question->setGoodAnswer('Tantor');
        $question->setQuiz($quizDisney);
        $quizDisney->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('En quelle année est sorti Pinocchio ?');
        $question->setAnswer1('1900');
        $question->setAnswer2('1920');
        $question->setAnswer3('1940');
        $question->setAnswer4('1960');
        $question->setGoodAnswer('1940');
        $question->setQuiz($quizDisney);
        $quizDisney->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Comment s\'appelle le serpent dans le livre de la jungle ?');
        $question->setAnswer1('Persiflor');
        $question->setAnswer2('Kaa');
        $question->setAnswer3('Shere Khan');
        $question->setAnswer4('Mowgli');
        $question->setGoodAnswer('Kaa');
        $question->setQuiz($quizDisney);
        $quizDisney->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Qui chante la B.O de Frère des Ours ?');
        $question->setAnswer1('Jean-Jacques Goldman');
        $question->setAnswer2('Phil Collins');
        $question->setAnswer3('Mickael Jackson');
        $question->setAnswer4('Florent Pagny');
        $question->setGoodAnswer('Phil Collins');
        $question->setQuiz($quizDisney);
        $quizDisney->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Quel pseudonyme masculin prend mulan pour rentrer dans l\'armée ?');
        $question->setAnswer1('Ding');
        $question->setAnswer2('Ping');
        $question->setAnswer3('Ning');
        $question->setAnswer4('Ming');
        $question->setGoodAnswer('Ping');
        $question->setQuiz($quizDisney);
        $quizDisney->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans la belle et la bête, pourquoi la bête a t\'elle cette apparence ?');
        $question->setAnswer1('Elle est née comme ça');
        $question->setAnswer2('Elle a muté');
        $question->setAnswer3('Elle a été ensorcellée');
        $question->setAnswer4('C\'est un déguisement');
        $question->setGoodAnswer('Elle a été ensorcellé');
        $question->setQuiz($quizDisney);
        $quizDisney->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Comment s\'appellent les demi-soeurs de Cendrillon ?');
        $question->setAnswer1('Javotte & Anastasie');
        $question->setAnswer2('Gérondine & Anastasia');
        $question->setAnswer3('Javelle & Ana');
        $question->setAnswer4('Elle n\'a pas de demi-soeurs !');
        $question->setGoodAnswer('Javotte & Anastasie');
        $question->setQuiz($quizDisney);
        $quizDisney->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans quel Disney peut-on voir une armée de morts-vivants ?');
        $question->setAnswer1('Mulan');
        $question->setAnswer2('Hercule');
        $question->setAnswer3('Taram et le chaudron magique');
        $question->setAnswer4('Bernard et Bianca');
        $question->setGoodAnswer('Taram et le chaudron magique');
        $question->setQuiz($quizDisney);
        $quizDisney->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans Hercule, combien il y a t-il de Titans ?');
        $question->setAnswer1('3');
        $question->setAnswer2('4');
        $question->setAnswer3('5');
        $question->setAnswer4('6');
        $question->setGoodAnswer('4');
        $question->setQuiz($quizDisney);
        $quizDisney->addQuestion($question);
        
        $manager->persist($quizDisney);

        
        // Quiz PHP
        $quizPhp = new Quiz();
        $quizPhp->setNom('Langage PHP');
        
        $question = new Question();
        $question->setQuestion('PHP est-il un langage :');
        $question->setAnswer1('Compilé');
        $question->setAnswer2('Interprété');
        $question->setAnswer3('Bousillé');
        $question->setAnswer4('Flush compatible');
        $question->setGoodAnswer('Interprété');
        $question->setQuiz($quizPhp);
        $quizPhp->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Peut-on faire de la programmation Orientée Objet en PHP ?');
        $question->setAnswer1('Oui');
        $question->setAnswer2('Non');
        $question->setAnswer3('La POO appartient uniquement à Java');
        $question->setAnswer4('Oui mais elle est nommée autrement');
        $question->setGoodAnswer('Oui');
        $question->setQuiz($quizPhp);
        $quizPhp->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Lequel de ces servers ne peut interprété du PHP 5.5 ?');
        $question->setAnswer1('Ngnix');
        $question->setAnswer2('Apache');
        $question->setAnswer3('Apache Tomcat');
        $question->setAnswer4('HHVM');
        $question->setGoodAnswer('Apache Tomcat');
        $question->setQuiz($quizPhp);
        $quizPhp->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Au 1er mars 2016, quelle est la dernière version de PHP ?');
        $question->setAnswer1('5.9');
        $question->setAnswer2('5.7');
        $question->setAnswer3('6');
        $question->setAnswer4('7');
        $question->setGoodAnswer('7');
        $question->setQuiz($quizPhp);
        $quizPhp->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Lequel de ces framework PHP a été créé par des Français ?');
        $question->setAnswer1('Zend');
        $question->setAnswer2('CodeIgniter');
        $question->setAnswer3('Symfony');
        $question->setAnswer4('CakePHP');
        $question->setGoodAnswer('Symfony');
        $question->setQuiz($quizPhp);
        $quizPhp->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Que fait le fonction serialize() ?');
        $question->setAnswer1('Elle compresse des données pour gagner de l\'espace.');
        $question->setAnswer2('Elle encode en UTF-8.');
        $question->setAnswer3('Elle créé une représentation stockable inter-scripts d\'une valeur PHP.');
        $question->setAnswer4('Elle interprète le Javascript');
        $question->setGoodAnswer('Elle créé une représentation stockable inter-scripts d\'une valeur PHP.');
        $question->setQuiz($quizPhp);
        $quizPhp->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Que fait la fonction print_r() ?');
        $question->setAnswer1('Elle affiche un array.');
        $question->setAnswer2('Elle affiche une racine carrée.');
        $question->setAnswer3('Elle affiche les valeurs private des objets.');
        $question->setAnswer4('Elle affiche des informations à propos d\'une variable.');
        $question->setGoodAnswer('Elle affiche des informations à propos d\'une variable.');
        $question->setQuiz($quizPhp);
        $quizPhp->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Que fait la fonction unset() ?');
        $question->setAnswer1('Elle annule la dernière configuration sur une variable.');
        $question->setAnswer2('Elle annule l\'encodage d\'une variable.');
        $question->setAnswer3('Elle détruit une variable.');
        $question->setAnswer4('Elle mesure la longueur d\'une chaine de caractères.');
        $question->setGoodAnswer('Elle détruit une variable.');
        $question->setQuiz($quizPhp);
        $quizPhp->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Lequel de ces protocoles HTTP n\'existe pas ?');
        $question->setAnswer1('GET');
        $question->setAnswer2('DELETE');
        $question->setAnswer3('INSERT');
        $question->setAnswer4('PUT');
        $question->setGoodAnswer('INSERT');
        $question->setQuiz($quizPhp);
        $quizPhp->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Laquelle de ces fonctions n\'existe pas en PHP ?');
        $question->setAnswer1('print');
        $question->setAnswer2('unserialize');
        $question->setAnswer3('dump');
        $question->setAnswer4('isset');
        $question->setGoodAnswer('dump');
        $question->setQuiz($quizPhp);
        $quizPhp->addQuestion($question);
        
        $manager->persist($quizPhp);
        
       
        // Quiz Mangas
        $quizMangas = new Quiz();
        $quizMangas->setNom('Mangas');
        
        $question = new Question();
        $question->setQuestion('Dans le manga Naruto, qui est le meilleur ami de Naruto ?');
        $question->setAnswer1('Naruto');
        $question->setAnswer2('Jiraya');
        $question->setAnswer3('Gaara');
        $question->setAnswer4('Sasuke');
        $question->setGoodAnswer('Sasuke');
        $question->setQuiz($quizMangas);
        $quizMangas->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans One piece, quel est le but de zoro ?');
        $question->setAnswer1('Devenir de roi des pirates.');
        $question->setAnswer2('Devenir riche.');
        $question->setAnswer3('Devenir le meilleur épéiste.');
        $question->setAnswer4('Vaincre Luffy');
        $question->setGoodAnswer('Devenir le meilleur épéiste.');
        $question->setQuiz($quizMangas);
        $quizMangas->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans Dragon Ball, quel est le nom du grand-père de Son Goku ?');
        $question->setAnswer1('Tortue géniale.');
        $question->setAnswer2('San Gohan.');
        $question->setAnswer3('Gyumao.');
        $question->setAnswer4('Radditz.');
        $question->setGoodAnswer('San Gohan.');
        $question->setQuiz($quizMangas);
        $quizMangas->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans Berserk quel est le nom du héros ?');
        $question->setAnswer1('Gutz');
        $question->setAnswer2('Butz');
        $question->setAnswer3('Jutz');
        $question->setAnswer4('Cutz');
        $question->setGoodAnswer('Gutz');
        $question->setQuiz($quizMangas);
        $quizMangas->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans Dragon Ball, Combien Son Goten a t-il de frère ?');
        $question->setAnswer1('1');
        $question->setAnswer2('2');
        $question->setAnswer3('3');
        $question->setAnswer4('4');
        $question->setGoodAnswer('1');
        $question->setQuiz($quizMangas);
        $quizMangas->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans GTO, quel est le nom du héros ?');
        $question->setAnswer1('Onizuka');
        $question->setAnswer2('Tetsuka');
        $question->setAnswer3('Otestsu');
        $question->setAnswer4('Okizuka');
        $question->setGoodAnswer('Onizuka');
        $question->setQuiz($quizMangas);
        $quizMangas->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans bleach, quel est le nom de l\'épée d\'Ichigo ?');
        $question->setAnswer1('Zangetsu');
        $question->setAnswer2('Getsuga');
        $question->setAnswer3('Tenshou');
        $question->setAnswer4('Kame-senin');
        $question->setGoodAnswer('Zangetsu');
        $question->setQuiz($quizMangas);
        $quizMangas->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans Death Note, qui est L ?');
        $question->setAnswer1('Light.');
        $question->setAnswer2('Le detective en chef.');
        $question->setAnswer3('Le shinigami.');
        $question->setAnswer4('Le père de Light.');
        $question->setGoodAnswer('Le detective en chef.');
        $question->setQuiz($quizMangas);
        $quizMangas->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans Full Metal Alchemist, qu\'il y a t-il dans l\'armure d\'Alphonse ?');
        $question->setAnswer1('Rien du tout.');
        $question->setAnswer2('Alphonse.');
        $question->setAnswer3('Un sceau.');
        $question->setAnswer4('Edward.');
        $question->setGoodAnswer('Un sceau.');
        $question->setQuiz($quizMangas);
        $quizMangas->addQuestion($question);
        
        $question = new Question();
        $question->setQuestion('Dans L\'Attaque des Titans, Lequel de ces personnage est humain et titan ?');
        $question->setAnswer1('Erwin Smith');
        $question->setAnswer2('Eren Jäger');
        $question->setAnswer3('Mikasa Ackerman');
        $question->setAnswer4('Reiner Braun');
        $question->setGoodAnswer('Eren Jäger');
        $question->setQuiz($quizMangas);
        $quizMangas->addQuestion($question);
        
        $manager->persist($quizMangas);
        $manager->flush();
    }

}
