<?php

namespace Blogger\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Blogger\BlogBundle\Entity\User;

class UserController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $useri = $em->getRepository('BloggerBlogBundle:User')
                    ->getLatestUsers();

        // replace this example code with whatever you need
        return $this->render('BloggerBlogBundle:Admin/Useri:index.html.twig', array('useri' => $useri));
    }

    public function createAction(Request $request)
    {
		$user = new User();
		$form=$this->createFormBuilder($user)
		->add('nume','text')
	   ->add('prenume','text') 
		->add('email','email')
		->add('password','password')
		->add('plainPassword','password')
		->add('save', 'submit')->getForm();
		$form->handleRequest($request);
		if($form->isValid()){
			$em=$this->getDoctrine()->getmanager();
			$em->persist($user);
			$em->flush();
			return $this->redirectToRoute('BloggerBlogBundle_admin_useri_index');
		}
		
			
			return $this->render('BloggerBlogBundle:Admin/Useri:create.html.twig', array(
				'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
				'form' =>$form->createView()

			));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('BloggerBlogBundle:User')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Acest user nu exista');
        }

        // replace this example code with whatever you need
        return $this->render('BloggerBlogBundle:Admin/Useri:show.html.twig', array('user' => $user));
    }
    public function editAction(Request $request, $id) {
$em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('BloggerBlogBundle:User')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Acest articol nu exista');
        }
            $form=$this->createFormBuilder($user)
		->add('nume','text')
	   ->add('prenume','text') 
		->add('email','email')
		->add('password','password')
		->add('plainPassword','password')
		->add('save', 'submit')->getForm();
         $form->handleRequest($request);

        if($form->isValid()){
        $em->flush();
        return $this->redirectToRoute('BloggerBlogBundle_admin_useri_index');
    }


        // replace this example code with whatever you need
        return $this->render('BloggerBlogBundle:Admin/Useri:edit.html.twig', array(            
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'form' =>$form->createView()));
    }
    public function deleteAction(Request $request, User $id) { 

    $em = $this->getDoctrine()->getManager();

    $user = $em->getRepository('BloggerBlogBundle:User')->find($id);

    $em->remove($user);
    $em->flush();
    $this->addFlash('success', 'post.deleted_successfully');

    return $this->redirectToRoute('BloggerBlogBundle_admin_useri_index');
    }

}
