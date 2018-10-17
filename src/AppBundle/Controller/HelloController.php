<?php

namespace AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends Controller
{
    /**
     * @Route("hello")
     */
    public function helloAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('default/hello.html.twig');
    }
}
