<?php

namespace Olimpiu\Bundle\CrisanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('OlimpiuCrisanBundle::home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'path' => "/OlimpiuCrisan/"
        ]);
    }
}
