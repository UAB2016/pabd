<?php

namespace Inserare\InserareaBundle\Entity;

/**
 * Admin
 */
class Admin
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nume;

    /**
     * @var string
     */
    private $prenume;

    /**
     * @var string
     */
    private $telefon;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $parola;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nume
     *
     * @param string $nume
     *
     * @return Admin
     */
    public function setNume($nume)
    {
        $this->nume = $nume;

        return $this;
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
     * Set prenume
     *
     * @param string $prenume
     *
     * @return Admin
     */
    public function setPrenume($prenume)
    {
        $this->prenume = $prenume;

        return $this;
    }

    /**
     * Get prenume
     *
     * @return string
     */
    public function getPrenume()
    {
        return $this->prenume;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     *
     * @return Admin
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Admin
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
     * Set parola
     *
     * @param string $parola
     *
     * @return Admin
     */
    public function setParola($parola)
    {
        $this->parola = $parola;

        return $this;
    }

    /**
     * Get parola
     *
     * @return string
     */
    public function getParola()
    {
        return $this->parola;
    }
}

