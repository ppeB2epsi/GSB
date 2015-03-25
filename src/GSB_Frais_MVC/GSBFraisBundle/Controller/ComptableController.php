<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/03/15
 * Time: 10:57
 */

namespace GSB_Frais_MVC\GSBFraisBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ComptableController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('GSBFraisBundle:Default:index.html.twig', array('name' => $name));
    }

}