<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    protected $github;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    protected $google;

    /**
     * @param string $github
     */
    public function setGithub($github)
    {
        $this->github = $github;
    }

    /**
     * @return string
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * @param string $google
     */
    public function setGoogle($google)
    {
        $this->google = $google;
    }

    /**
     * @return string
     */
    public function getGoogle()
    {
        return $this->google;
    }

    public function getId()
    {
        return $this->id;
    }
}