<?php

namespace Inserare\InserareaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sesio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Inserare\InserareaBundle\Entity\Admin;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class InserareaController extends Controller

{  
public function indexAction(Request $request)
    {
        return $this->render('InserareInserareuBundle:Default:index.html.twig');
    }
	public function inserareAction(Request $request)
{
	$admin=new Admin();
	$form=$this->createFormBuilder($admin)->add('nume','text')
	->add('prenume','text')
	->add('telefon','text')
	->add('email','text')
	->add('parola','text')
	->add('save', 'submit')->getForm();
	$form->handleRequest($request);
	if($form->isValid()){
		$em=$this->getDoctrine()->getmanager();
		$em->persist($admin);
		$em->flush();
		
	}
	return $this->render('inserarea.html.twig', array (
	'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
	
	'form' =>$form->createView()
	));
	
    /*$user = new Admin();
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
/*public function afisazaAction()
{
	$em = $this->getDoctrine()->getManager();
$query = $em->createQuery(
    'SELECT p
    FROM Adauga\AdaugauBundle:User p
    WHERE p.id :1'
);

$user = $query->getResult();
}*/
}
