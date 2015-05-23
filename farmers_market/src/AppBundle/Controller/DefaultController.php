<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
    	$userManager = $this->get('fos_user.user_manager');
    	$users = $userManager->findUsers();
        return $this->render('default/index.html.twig', array('users' =>   $users));
    }
}
