<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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
use Symfony\Component\HttpKernel\Config\FileLocator;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;

class WelcomeController extends Controller
{
    
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        resource: '../../../quickstart.php';
        $response->headers->set('Content-Type', 'text/plain');

    }


    /**
     * @Route("/login", name="loginform")
     * @Method({"GET", "POST"})
     */

    public function loginAction(Request $request) {

        //$response = new RedirectResponse('../../../quickstart.php');

        $request = Request::create(
            '../../../quickstart.php',
            'GET',
            array('name' => 'Fabien')
        );

        return $request;
        //require_once "include_path='quickstart.php'";

        //require_once '../../../vendor/autoload.php';
/*
        $client= new \Google_Client();
        $client->setApplicationName('symfonyApp');// to set app name
        $client->setClientId('588530792979-cd07nit4ki9l2ksj4kms3cs0fqeglii0.apps.googleusercontent.com');// to set app id or client id
        $client->setClientSecret('mINeGSvxWYG7-9VjCBKB_m9k'); // to set app secret or client secret   
        $client->setRedirectUri('http://localhost:8001/auth/oauth2/auth');// to set redirect uri

        $url= $client->createAuthUrl();// to get login url
        echo $url;
        echo '<a href=”'.$url.'” onclick>Log in with Google!</a>';die;

*/

    }


    /**
     * @Route("/auth", name="auth//accounts.google.com/o/oauth2/auth")
     * @Method("GET")
     */

     public function redirectAction(Request $request) {
        $client= new \Google_Client();
        
        echo $client;
        
        $client->setApplicationName('symfonyApp');// to set app name
        $client->setClientId('588530792979-cd07nit4ki9l2ksj4kms3cs0fqeglii0.apps.googleusercontent.com');// to set app id or client id
        $client->setClientSecret('mINeGSvxWYG7-9VjCBKB_m9k');// to set app secret or client secret
        $client->setRedirectUri('http://localhost:8001/auth/oauth2/auth');// to set redirect uri
                
        $service = new \Google_Service_Oauth2($client);
        $code=$client->authenticate($request->query->get('code'));// to get code
        $client->setAccessToken($code);// to get access token by setting of $code
        $userDetails=$service->userinfo->get();// to get user detail by using access token
        var_dump($userDetails);die;
    }


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
     * @Route("/product", name="productpage")
     */

    public function productAction() {
        $response = $this->forward('App\Controller\ProductController::fancy');

        // ... further modify the response or return it directly

        return $response;
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