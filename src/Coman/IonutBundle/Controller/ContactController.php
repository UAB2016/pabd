<?php

namespace Coman\IonutBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Coman\IonutBundle\Entity\Contact;
use Coman\IonutBundle\Form\ContactType;

/**
 * Contact controller.
 *
 */
class ContactController extends Controller
{
    /**
     * Lists all Contact entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contacts = $em->getRepository('ComanIonutBundle:Contact')->findAll();

        return $this->render('@ComanIonut/contact/index.html.twig', array(
            'contacts' => $contacts,
        ));
    }

    /**
     * Creates a new Contact entity.
     *
     */
    public function newAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm('Coman\IonutBundle\Form\ContactType', $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('coman-ionut-blog_contact_show', array('id' => $contact->getId()));
        }

        return $this->render('@ComanIonut/contact/new.html.twig', array(
            'contact' => $contact,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Contact entity.
     *
     */
    public function showAction(Contact $contact)
    {

        return $this->render('@ComanIonut/contact/show.html.twig', array(
            'contact' => $contact,
        ));
    }

}
