<?php

namespace GSB_Frais_MVC\GSBFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BDDController extends Controller
{
    public function IndexAction()
    {
        return $this->render('GSBFraisBundle:BDD:Index.html.twig', array(
                // ...
            ));    }

}
