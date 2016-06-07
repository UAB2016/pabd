<?php

namespace Blogger\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Blogger\BlogBundle\Entity\Blog;
use Blogger\BlogBundle\Form\PostType;

class AdminController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
                    ->getLatestBlogs();

        // replace this example code with whatever you need
        return $this->render('BloggerBlogBundle:Admin/default:index.html.twig', array('blogs' => $blogs));
    }

    public function createAction(Request $request)
    {
        
    $post = new Blog();
    $form=$this->createFormBuilder($post)->add('title','text')
   ->add('author','text') 
    ->add('blog','textarea', array('required' => false))
    ->add('tags','text')
     ->add('image','file')
    ->add('save', 'submit')->getForm();
    $form->handleRequest($request);
    if($form->isValid()){
        $em=$this->getDoctrine()->getmanager();
        $em->persist($post);
        $em->flush();
        return $this->redirectToRoute('BloggerBlogBundle_admin');
    }
    
        
        return $this->render('BloggerBlogBundle:Admin/default:create.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'form' =>$form->createView()

        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Acest articol nu exista');
        }

        // replace this example code with whatever you need
        return $this->render('BloggerBlogBundle:Admin/default:show.html.twig', array('blog' => $blog));
    }
    public function editAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Acest articol nu exista');
        }
            $form=$this->createFormBuilder($blog)
            ->add('title','text')
            ->add('author','text')
            ->add('blog','textarea', array('required' => false))
            ->add('tags','text')
            ->add('image','file', array(
                'data_class' => null
            ))
            ->add('save', 'submit')->getForm();
         $form->handleRequest($request);

        if($form->isValid()){
        $em->flush();
        return $this->redirectToRoute('BloggerBlogBundle_admin');
    }


        // replace this example code with whatever you need
        return $this->render('BloggerBlogBundle:Admin/default:edit.html.twig', array(            
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'form' =>$form->createView()));
    }
    public function deleteAction(Request $request, Blog $id) { 

    $em = $this->getDoctrine()->getManager();

    $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

    $em->remove($blog);
    $em->flush();
    $this->addFlash('success', 'post.deleted_successfully');

    return $this->redirectToRoute('BloggerBlogBundle_admin');
    }

}
