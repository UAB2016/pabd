<?php

namespace Blogger\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Blogger\BlogBundle\Entity\Enquiry;

class ContactController extends Controller
{

    public function indexAction()
    {
		 $em = $this->getDoctrine()
                   ->getManager();

        $contacte = $em->getRepository('BloggerBlogBundle:Enquiry')
                    ->getLatestContacts();
					
        // replace this example code with whatever you need
        return $this->render('BloggerBlogBundle:Admin/contact:index.html.twig', array('contacte' => $contacte));
    }
	
	public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $contact = $em->getRepository('BloggerBlogBundle:Enquiry')->find($id);

        if (!$contact) {
            throw $this->createNotFoundException('Nu exista');
        }

        // replace this example code with whatever you need
        return $this->render('BloggerBlogBundle:Admin/contact:show.html.twig', array('contact' => $contact));
    }
	
	public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $contacte = $em->getRepository('BloggerBlogBundle:Contact')->find($id);

        if (!$contacte) {
            throw $this->createNotFoundException('Nu exista');
        }

        // replace this example code with whatever you need
        return $this->render('BloggerBlogBundle:Admin/contact:edit.html.twig', array('contacte' => $contacte));
    }
	
    public function deleteAction(Request $request, Enquiry $id) { 

    $em = $this->getDoctrine()->getManager();

    $contact = $em->getRepository('BloggerBlogBundle:Enquiry')->find($id);

    $em->remove($contact);
    $em->flush();
    $this->addFlash('success', 'post.deleted_successfully');

    return $this->redirectToRoute('BloggerBlogBundle_admin_contact_index');
    }


}
