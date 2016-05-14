<?php

namespace AppBundle\Controller\Admin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\Post;

class BlogController extends Controller
{
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $posts = $entityManager->getRepository('AppBundle:Post')->findAll();

        return $this->render('admin/blog/index.html.twig', array('posts' => $posts));
    }

    public function newAction(Request $request)
    {
        $post = new Post();
        $post->setAuthorEmail($this->getUser()->getEmail());

        $form = $this->createForm('AppBundle\Form\PostType', $post)
            ->add('saveAndCreateNew', 'Symfony\Component\Form\Extension\Core\Type\SubmitType');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post->setSlug($this->get('slugger')->slugify($post->getTitle()));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();

            $this->addFlash('success', 'post.created_successfully');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_post_new');
            }

            return $this->redirectToRoute('admin_post_index');
        }

        return $this->render('admin/blog/new.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Post entity.
     *
     * @Route("/{id}", requirements={"id": "\d+"}, name="admin_post_show")
     * @Method("GET")
     */
    public function showAction(Post $post)
    {

        if (null === $this->getUser() || !$post->isAuthor($this->getUser())) {
            throw $this->createAccessDeniedException('Posts can only be shown to their authors.');
        }

        $deleteForm = $this->createDeleteForm($post);

        return $this->render('admin/blog/show.html.twig', array(
            'post'        => $post,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Post entity.
     *
     * @Route("/{id}/edit", requirements={"id": "\d+"}, name="admin_post_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Post $post, Request $request)
    {
        if (null === $this->getUser() || !$post->isAuthor($this->getUser())) {
            throw $this->createAccessDeniedException('Posts can only be edited by their authors.');
        }

        $entityManager = $this->getDoctrine()->getManager();

        $editForm = $this->createForm('AppBundle\Form\PostType', $post);
        $deleteForm = $this->createDeleteForm($post);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $post->setSlug($this->get('slugger')->slugify($post->getTitle()));
            $entityManager->flush();

            $this->addFlash('success', 'post.updated_successfully');

            return $this->redirectToRoute('admin_post_edit', array('id' => $post->getId()));
        }

        return $this->render('admin/blog/edit.html.twig', array(
            'post'        => $post,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Post $post)
    {
        $form = $this->createDeleteForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->remove($post);
            $entityManager->flush();

            $this->addFlash('success', 'post.deleted_successfully');
        }

        return $this->redirectToRoute('admin_post_index');
    }

    private function createDeleteForm(Post $post)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_post_delete', array('id' => $post->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
