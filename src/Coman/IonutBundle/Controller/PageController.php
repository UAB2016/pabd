<?php
namespace Coman\IonutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('ComanIonutBundle:Page:index.html.twig');
    }
}
