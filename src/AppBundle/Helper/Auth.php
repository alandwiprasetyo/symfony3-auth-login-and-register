<?php

/**
 * Created by PhpStorm.
 * User: alandwiprasetyo
 * Date: 9/6/16
 * Time: 10:24 AM
 */

namespace AppBundle\Helper;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Auth extends Controller
{

    public static function check(Controller $controller)
    {
        return $controller->getUser();
    }
}