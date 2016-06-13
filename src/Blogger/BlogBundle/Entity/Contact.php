<?php
// src/Blogger/BlogBundle/Entity/Contact.php

namespace Blogger\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Blogger\BlogBundle\Entity\Repository\ContactRepository")
 * @ORM\Table(name="contact")
 * @ORM\HasLifecycleCallbacks
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $nume;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $mail;

    /**
     * @ORM\Column(type="text")
     */
    protected $subiect;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $mesaj;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $data;



	public function __construct()
    {
		$this->comments = new ArrayCollection();
		
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
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
     * Set title
     *
     * @param string $title
     * @return Contact
     */
    public function setNume($nume)
    {
        $this->nume = $nume;

    }

    /**
     * Get nume
     *
     * @return string 
     */
    public function getNume()
    {
        return $this->nume;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Contact
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get Mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set subiect
     *
     * @param string $subiect
     * @return Contact
     */
    public function setSubiect($subiect)
    {
        $this->subiect = $subiect;

        return $this;
    }

    /**
     * Get subiect
     *
     * @return string 
     */
    public function getSubiect($length = null)
	{
		return $this->subiect;
	}

    /**
     * Set mesaj
     *
     * @param string $image
     * @return Contact
     */
    public function setMesaj($mesaj)
    {
        $this->mesaj = $mesaj;

        return $this;
    }

    /**
     * Get mesaj
     *
     * @return string 
     */
    public function getMesaj()
    {
        return $this->mesaj;
    }


    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Blog
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }
	
	public function __toString()
	{
		return $this->getTitle();
	}


}
