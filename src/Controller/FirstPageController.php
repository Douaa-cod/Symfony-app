<?php 
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class FirstPageController extends AbstractController 
{
    function index() {
        $hello = "hello";
        return new Response($hello);
    }
}