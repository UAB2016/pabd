<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DespreCameliaController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexCameliaAction()
    { $name="Camelia";
		//$var='HI';return new Response ('<html><body>Pagina personala'.$name.'<body></html>');
        // replace this example code with whatever you need
        return $this->render('desprecamelia.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
		//return new Response ('<html><body>Pagina personala'.$name.'<body></html>');
    }
}
