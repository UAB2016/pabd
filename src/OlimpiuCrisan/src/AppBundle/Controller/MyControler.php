<?php

    namespace AppBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;


    class MyControler extends Controller {

        /**
         * @Route("/")
         */
         public function indexAction()
         {
             return $this->render('myFiles/home.html.twig', [
                 'myName' => "Crisan Augustin Olimpiu",
             ]);
         }
    }
