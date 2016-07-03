<?php

namespace IonelaMazilu\IonelaMaziluBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use IonelaMazilu\IonelaMaziluBundle\Entity\Contact;
use IonelaMazilu\IonelaMaziluBundle\Form\ContactType;

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

        $contacts = $em->getRepository('IonelaMaziluBundle:Contact')->findAll();

        return $this->render('@IonelaMazilu/contact/index.html.twig', array(
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
        $form = $this->createForm('IonelaMazilu\IonelaMaziluBundle\Form\ContactType', $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('ionela-mazilu-blog_contact_show', array('id' => $contact->getId()));
        }

        return $this->render('@IonelaMazilu/contact/new.html.twig', array(
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

        return $this->render('@IonelaMazilu/contact/show.html.twig', array(
            'contact' => $contact,
        ));
    }

}
