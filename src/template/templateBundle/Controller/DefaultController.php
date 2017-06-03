<?php

namespace template\templateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('templateBundle:Default:index.html.twig');
    }
}
