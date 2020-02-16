<?php 
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class HomeController extends AbstractController 
{
    function index() {
/*      $hello = "hello";
        return new Response($hello);
        return $this->render('base.html.twig'); */
        return $this->redirectToRoute('redirectTo');
        //throw $this->createNotFoundException('error');
    }

    function hello(){
        echo "hello";
        die;
    }
}