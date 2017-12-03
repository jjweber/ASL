<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\NotBlank;

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

    /**
     * @Route("/registerForm" name="registerForm")
     */

    public function registerForm(Request $request) {

        $form = $this->createFormBuilder(null)
        ->setAction($this->generateUrl("registerForm"))
        ->add("name", TextType::class, array("required"=>true, "constraints"=>[
            new NotBlank(array("message"=>"Can not be blank."))
            ]))

        ->add("email", TextType::class, array("required"=>true, "constraints"=> [
            new EmailConstraint()
        ]))

        return $this->render('templates/registerForm.html.twig', array( "title" => "Register", "form" => $form->createView() ));


    }

}