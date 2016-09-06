<?php

namespace AppBundle\Controller;

use AppBundle\Helper\Auth;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function adminPage(Request $request)
    {
        if(Auth::check($this))
            return $this->render('auth/admin.html.twig', ['status' => $this->getUser()]);
        else
            return $this->redirectToRoute('security_login');

    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}
