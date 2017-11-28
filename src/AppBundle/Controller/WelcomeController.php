<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    public function indexAction() {
        return $this->render('templates/index.html.twig', array( "name" => "home" ));
    }

    /**
     * @Route("/hello", name="hellopage")
     */

    public function helloAction() {
        return $this->render('templates/hello.html.twig', array( "name" => "hello" ));
    }

}