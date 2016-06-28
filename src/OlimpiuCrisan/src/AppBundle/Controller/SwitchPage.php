<?php

    namespace AppBundle\Controller;

    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;


    class SwitchPage extends Controller {

        /**
         * @Route("/{page}")
         */
         public function indexAction($page)
         {
             return $this->render('myFiles/'.$page.'.html.twig', [
                 'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
             ]);
         }
    }
