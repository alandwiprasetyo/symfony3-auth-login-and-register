<?php
/**
 * Created by PhpStorm.
 * User: alandwiprasetyo
 * Date: 9/5/16
 * Time: 9:46 AM
 */

namespace AppBundle\Controller;

use AppBundle\Helper\Auth;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     */
    public function loginAction()
    {
        if(Auth::check($this))
            return $this->redirectToRoute('admin');

        $helper = $this->get('security.authentication_utils');
        return $this->render('auth/login.html.twig', [
            'last_username' => $helper->getLastUsername(),
            'error' => $helper->getLastAuthenticationError(),
        ]);
    }
    /**
     * @Route("/login_check", name="security_login_check")
     */
    public function loginCheckAction()
    {

        return new Response();
    }
}