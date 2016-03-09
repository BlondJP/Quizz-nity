<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table(name="answer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnswerRepository")
 */
class Answer
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
     * @var bool
     *
     * @ORM\Column(name="is_good", type="boolean")
     */
    private $isGood;
    
    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="answers")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    private $user;
    
    /**
    * @ORM\ManyToOne(targetEntity="Question", inversedBy="answers")
    * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
    */
    private $question;
    
    /**
    * @ORM\ManyToOne(targetEntity="Gameplay", inversedBy="answers")
    * @ORM\JoinColumn(name="gameplay_id", referencedColumnName="id")
    */
    private $gameplay;

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
     * Set isGood
     *
     * @param boolean $isGood
     * @return Answer
     */
    public function setIsGood($isGood)
    {
        $this->isGood = $isGood;
        return $this;
    }

    /**
     * Get isGood
     *
     * @return boolean 
     */
    public function getIsGood()
    {
        return $this->isGood;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Answer
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
     * Set question
     *
     * @param \AppBundle\Entity\Question $question
     * @return Answer
     */
    public function setQuestion(\AppBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \AppBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set gameplay
     *
     * @param \AppBundle\Entity\Gameplay $gameplay
     * @return Answer
     */
    public function setGameplay(\AppBundle\Entity\Gameplay $gameplay = null)
    {
        $this->gameplay = $gameplay;

        return $this;
    }

    /**
     * Get gameplay
     *
     * @return \AppBundle\Entity\Gameplay 
     */
    public function getGameplay()
    {
        return $this->gameplay;
    }
}
