<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DespreOrdaceController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexOrdaceAction()
    {
		//$var='HI';
		//return new Response ('<html><body>'.$name.'<body></html>');
        // replace this example code with whatever you need
        return $this->render('despreordace.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
