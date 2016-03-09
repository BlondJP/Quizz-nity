<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Gameplay
 *
 * @ORM\Table(name="gameplay")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameplayRepository")
 */
class Gameplay
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="beginAt", type="datetime")
     */
    private $beginAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endAt", type="datetime", nullable=true)
     */
    private $endAt;
    
    /**
     * @var int
     *
     * @ORM\Column(name="timeOfTheGame", type="integer", nullable=true)
     */
    private $timeOfTheGame;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;
    
    /**
    * @ORM\ManyToOne(targetEntity="Quiz", inversedBy="gameplay", cascade={"persist"}, fetch="EAGER")
    * @ORM\JoinColumn(name="quiz_id", referencedColumnName="id")
    */
    private $quiz;
    
    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="gameplay", cascade={"persist"}, fetch="EAGER")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    private $user;
    
    /**
    * @ORM\OneToMany(targetEntity="Answer", mappedBy="gameplay")
    */
    private $answers;
    
    public function __construct()
    {
        $this->answers = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set beginAt
     *
     * @param \DateTime $beginAt
     * @return Gameplay
     */
    public function setBeginAt($beginAt)
    {
        $this->beginAt = $beginAt;
        return $this;
    }

    /**
     * Get beginAt
     *
     * @return \DateTime 
     */
    public function getBeginAt()
    {
        return $this->beginAt;
    }

    /**
     * Set endAt
     *
     * @param \DateTime $endAt
     * @return Gameplay
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;
        return $this;
    }

    /**
     * Get endAt
     *
     * @return \DateTime 
     */
    public function getEndAt()
    {
        return $this->endAt;
    }

    /**
     * Set score
     *
     * @param integer $score
     * @return Gameplay
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set quiz
     *
     * @param \AppBundle\Entity\Quiz $quiz
     * @return Gameplay
     */
    public function setQuiz(\AppBundle\Entity\Quiz $quiz = null)
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * Get quiz
     *
     * @return \AppBundle\Entity\Quiz 
     */
    public function getQuiz()
    {
        return $this->quiz;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Gameplay
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add answers
     *
     * @param \AppBundle\Entity\Answer $answers
     * @return Gameplay
     */
    public function addAnswer(\AppBundle\Entity\Answer $answers)
    {
        $this->answers[] = $answers;

        return $this;
    }

    /**
     * Remove answers
     *
     * @param \AppBundle\Entity\Answer $answers
     */
    public function removeAnswer(\AppBundle\Entity\Answer $answers)
    {
        $this->answers->removeElement($answers);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set timeOfTheGame
     *
     * @param integer $timeOfTheGame
     * @return Gameplay
     */
    public function setTimeOfTheGame($timeOfTheGame)
    {
        $this->timeOfTheGame = $timeOfTheGame;

        return $this;
    }

    /**
     * Get timeOfTheGame
     *
     * @return integer 
     */
    public function getTimeOfTheGame()
    {
        return $this->timeOfTheGame;
    }
}
