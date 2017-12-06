<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class WelcomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    public function indexAction() {
        return $this->render('templates/index.html.twig', array( "name" => "home", "title" => "Home" ));
    }

    /**
     * @Route("/hello", name="hellopage")
     */

    public function helloAction() {
        return $this->render('templates/hello.html.twig', array( "name" => "hello", "title" => "Hello" ));
    }

    /**
     * @Route("/registerForm", name="registerForm")
     */

    public function registerForm(Request $request) {

        $form = $this->createFormBuilder(null)
        ->setAction($this->generateUrl("registerForm"))
        ->add("name", TextType::class, array("required"=>true, "constraints"=>[
            new NotBlank(array("message"=>"Can not be blank."))
            ]))
        ->add("email", TextType::class, array("required"=>true, "constraints"=> [
            new EmailConstraint(array("message"=>"This is not the correct way of typing an email.")),
            new NotBlank(array("message"=>"Can not be blank."))
        ]))
        ->add("myfile", FileType::class, array("constraints"=>[
            new File(array(
                'maxSize' => '2M',
                'mimeTypes' => [
                    'application/pdf',
                    'application/x-pdf'],
                'mimeTypesMessage' => 'Please upload a valid PDF'
            ))
        ]))
        ->add("save", SubmitType::class)
        ->getForm();

        $form->handleRequest($request);

        if ($request->isMethod("POST")) {

            if ($form->isValid()) {

                $file = $form->get("myfile")->getData();
                $fileName = md5(uniqid()).".".$file->guessExtension();
                $file->move("/Users/jweber0169/Documents/asl/symfony", $fileName);

                return $this->render("templates/regdone.html.twig", array("title"=>"Register"));

            }

        }

        return $this->render('templates/registerForm.html.twig', array( "title" => "Register", "form" => $form->createView() ));


    }

}