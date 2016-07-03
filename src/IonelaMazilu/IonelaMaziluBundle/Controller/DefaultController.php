<?php

namespace IonelaMazilu\IonelaMaziluBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IonelaMaziluBundle:Page:index.html.twig');
    }
    
    public function worksAction()
    {
	return $this->render('IonelaMaziluBundle:Page:works.html.twig');
    }
    
    public function aboutAction()
    {
	return $this->render('IonelaMaziluBundle:Page:about.html.twig');
    }
}
