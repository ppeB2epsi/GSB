<?php

namespace GSB__Frais_MVC\GSBFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GSBFraisBundle:Default:index.html.twig', array('name' => $name));
    }
}
