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
     * @Route("/", name="userspage")
     */

    public function usersAction() {

        $em = $this->getDoctrine()->getManager();
        $conn = $em->getConnection();

        $stmt = $conn->prepare("select * from users");
        $stmt->execute();
        $results = $stmt->fetchAll();

        $data = array("title"=>"Users", "users"=>$results);
        return $this->render('templates/users.html.twig', array( "name" => "users", "title" => "Users" ), $data);
    }

    /**
     * @Route("/", name="addForm")
     */

    public function addForm() {

        $data = array("title"=>"Users");
        return $this->render('templates/addForm.html.twig', $data);
    }

    /**
     * @Route("/", name="addUser")
     */

    public function addUser(Request $request) {

        $request = Request::createFromGlobals();
        $request->getPathInfo();

        $em = $this->getDoctrine()->getManager();
        $stmt = $em->getConnection()->prepare("insert into users (name, lastname, email) values (:name, :lastname, :email)");
        $stmt->bindValue('email', $request->get('email'));
        $stmt->bindValue('name', $request->get('name'));
        $stmt->bindValue('lastname', $request->get('lastname'));
        $stmt->execute();

        return $this->redirect("/users");
    }

    /**
     * @Route("/", name="gUser")
     */

    public function gUser(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $stmt = $em->getConnection()->prepare("select * from users where id = :id");
        $stmt->bindValue('id', $id);
        $stmt->execute();
        $results = $stmt->fetchAll();

        $data = array("title"=>"Users", "users"=>$results);
        return $this->render("/templates/updateForm.html.twig", $data);
    }

    /**
     * @Route("/", name="deleteUser")
     */

    public function deleteUser(Request $request, $id) {

        $request = Request::createFromGlobals();
        $request->getPathInfo();
        $em = $this->getDoctrine()->getManager();
        $stmt = $em->getConnection->prepare("delete form users where id = :id");
        $stmt->bindValue('id', $id);
        $stmt->execute();

        return $this->redirect("/users");
    }

    /**
     * @Route("/", name="updateUser")
     */

    public function updateUser(Request $request, $id) {

        $request = Request::createFromGlobals();
        $request->getPathInfo();
        $em = $this->getDoctrine()->getManager();
        $stmt = $em->getConnection->prepare("update users set name = :name, lastname = :lastname, email = :email where id = :id");
        $stmt->bindValue('id', $id);
        $stmt->bindValue('email', $request->get('email'));
        $stmt->bindValue('name', $request->get('name'));
        $stmt->bindValue('lastname', $request->get('lastname'));
        $stmt->execute();

        return $this->redirect("/users");
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