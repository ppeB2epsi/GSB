<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/03/15
 * Time: 10:57
 */

namespace GSB_Frais_MVC\GSBFraisBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LoginController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('GSBFraisBundle:Default:index.html.twig', array('name' => $name));
    }
    public function validerconnexionAction(){
        $session= $this->get('request')->getSession();
        $request = $this->get('request');
        $login =  $request->request->get('login');
        $mdp = $request->request->get('mdp');
        //$pdo = PdoGsb::getPdoGsb();
        $pdo = $this->get('pg_gsb_frais.pdo');
        $visiteur = $pdo->getInfosVisiteur($login,$mdp);
        if(!is_array($visiteur)){
            return $this->render('GSBFraisBundle:Default:connexion.html.twig',array(
                'message'=>'Erreur de login ou de mot de passe '));
        }
        else{
            $session->set('id',$visiteur['id']);
            $session->set('nom',$visiteur['nom']);
            $session->set('prenom',$visiteur['prenom']);
            return $this->render('GSBFraisBundle::accueil.html.twig');
        }
    }
    public function deconnexionAction(){
        $session= $this->get('request')->getSession();
        $session->clear();
        return $this->render('GSBFraisBundle:Default:connexion.html.twig');
    }
}