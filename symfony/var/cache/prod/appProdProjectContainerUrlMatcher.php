<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WelcomeController::indexAction',  '_route' => 'homepage',);
        }

        // userspage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'userspage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WelcomeController::usersAction',  '_route' => 'userspage',);
        }

        // addForm
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'addForm');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WelcomeController::addForm',  '_route' => 'addForm',);
        }

        // addUser
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'addUser');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WelcomeController::addUser',  '_route' => 'addUser',);
        }

        // gUser
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gUser');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WelcomeController::gUser',  '_route' => 'gUser',);
        }

        // deleteUser
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'deleteUser');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WelcomeController::deleteUser',  '_route' => 'deleteUser',);
        }

        // updateUser
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'updateUser');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\WelcomeController::updateUser',  '_route' => 'updateUser',);
        }

        // hellopage
        if ('/hello' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\WelcomeController::helloAction',  '_route' => 'hellopage',);
        }

        // registerForm
        if ('/registerForm' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\WelcomeController::registerForm',  '_route' => 'registerForm',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
