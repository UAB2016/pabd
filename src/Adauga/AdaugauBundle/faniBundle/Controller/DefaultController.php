<?php

namespace Adauga\faniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('faniBundle:Default:index.html.twig');
    }
}
