<?php

namespace Inserare\InserareaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InserareInserareaBundle:Default:index.html.twig');
    }
}
