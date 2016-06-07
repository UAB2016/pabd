<?php

namespace Lukacs\LukacsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lukacs\LukacsBundle\Entities\Contact;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function page1Action($name)
    {
        return $this->render('LukacsLukacsBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function page2Action($name)
    {
        return $this->render('LukacsLukacsBundle:Default:index2.html.twig', array('name' => $name));
    }
    
    public function formAction(Request $request)
    {
	$contact=new Contact();
	$form=$this->createFormBuilder($contact)
                 ->add('subiect')
            ->add('mesaj')
                ->add('telefon')
                ->add('email')
            ->getForm();

        return $this->render('LukacsLukacsBundle:Default:form.html.twig', array(
            'form' => $form->createView(),
        ));
//	    $this->get('mailer')->send($message);

//    return $this->render('LukacsLukacsBundle:Default:email-sent.html.twig');
    }
}
