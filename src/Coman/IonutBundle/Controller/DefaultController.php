<?php

namespace Coman\IonutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ComanIonutBundle:Default:index.html.twig');
    }
}
