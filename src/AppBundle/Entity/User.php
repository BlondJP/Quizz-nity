<?php

// src/AppBundle/Entity/User.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=40)
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=64)
     * @return string
     */
    private $password;


    /**
     * @ORM\Column(type="string", length=64)
     */
    private $plainPassword;
    
    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    
    /**
     * @ORM\Column(name="isRole", type="string", columnDefinition="enum('ROLE_USER', 'ROLE_ADMIN')")
     */
    private $isRole;
    
    /**
    * @ORM\OneToMany(targetEntity="Answer", mappedBy="user")
    */
    private $answers;
    
    /**
    * @ORM\OneToMany(targetEntity="Gameplay", mappedBy="user")
    */
    private $gameplay;

    public function __construct()
    {
        $this->isActive = true;
        $this->answers = new ArrayCollection();
        $this->gameplay = new ArrayCollection();
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }
    
    /**
     * Set isRole
     *
     * @param string $isRole
     * @return User
     */

    public function setIsRole($isRole)
    {
        $this->isRole = $isRole;

        return $this;
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     * 
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get isRole
     *
     * @return string 
     */
    public function getIsRole()
    {
        return $this->isRole;
    }

    /**
     * Get salt
     * 
     * @return null
     */
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
    
    /**
     * Get plain password
     * 
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Set plain password
     * 
     * @param string $password
     */
    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }
    
    /**
     * Get roles
     * 
     * @return array
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    
    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add answers
     *
     * @param \AppBundle\Entity\Answer $answers
     * @return User
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
     * Add gameplay
     *
     * @param \AppBundle\Entity\Gameplay $gameplay
     * @return User
     */
    public function addGameplay(\AppBundle\Entity\Gameplay $gameplay)
    {
        $this->gameplay[] = $gameplay;

        return $this;
    }

    /**
     * Remove gameplay
     *
     * @param \AppBundle\Entity\Gameplay $gameplay
     */
    public function removeGameplay(\AppBundle\Entity\Gameplay $gameplay)
    {
        $this->gameplay->removeElement($gameplay);
    }

    /**
     * Get gameplay
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGameplay()
    {
        return $this->gameplay;
    }
}
