<?php

namespace gesGfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('gesGfctBundle:Default:index.html.twig');
    }
}
