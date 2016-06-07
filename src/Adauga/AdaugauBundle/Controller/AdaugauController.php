<?php

namespace Adauga\AdaugauBundle\Controller;

use Sesio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Adauga\AdaugauBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class AdaugauController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('AdaugaAdaugauBundle:Default:index.html.twig');
    }
	public function adaugaAction(Request $request)
{
	$user=new User();
	$form=$this->createFormBuilder($user)->add('nume','text')
	->add('prenume','text') 
	->add('email','text')
	->add('parola','text')
	->add('save', 'submit')->getForm();
	$form->handleRequest($request);
	if($form->isValid()){
		$em=$this->getDoctrine()->getmanager();
		$em->persist($user);
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
