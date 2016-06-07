<?php

namespace Lukacs\LukacsBundle\Entities;


/**
 * Contact
 */
class Contact
{
    /**
     * @var string
     */
    private $subiect;

    /**
     * @var string
     */
    private $mesaj;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $telefon;


    function getSubiect() {
        return $this->subiect;
    }

    function getMesaj() {
        return $this->mesaj;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefon() {
        return $this->telefon;
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }

    function setMessage($message) {
        $this->message = $message;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefon($telefon) {
        $this->telefon = $telefon;
    }


}

