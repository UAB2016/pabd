<?php

namespace Adauga\faniBundle\Controller;

use Sesio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Adauga\faniBundle\Entity\Fani;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class AdaugaFaniController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('AdaugafaniBundle:Default:index.html.twig');
    }
	public function adaugafaniAction(Request $request)
{
	$fani=new Fani();
	$form=$this->createFormBuilder($fani)->add('nume','text')
	->add('prenume','text') 
	->add('cnp','text')
	->add('email','text')
	->add('telefon','text')
	->add('save', 'submit')->getForm();
	$form->handleRequest($request);
	if($form->isValid()){
		$em=$this->getDoctrine()->getmanager();
		$em->persist($fani);
		$em->flush();
		
	}
	return $this->render('adaugareu.html.twig', array (
	'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
	'form' =>$form->createView()
	));
	
    /*$user = new User();
    $user->setNume('Ordace');
    $user->setPrenume('Daniela');
    $user->setEmail('ordacedaniela@yahoo.com');
	$user->setParola('passwordp');

    $em = $this->getDoctrine()->getManager();

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($user);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();

    return new Response('Adaugare user cu id-ul '.$user->getId());*/
}

}
