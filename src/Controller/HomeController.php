<?php 
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/** 
 * @Route("first/");
 */

class HomeController extends AbstractController 
{
    /** 
     * @Route("/home");
     */
    function index() {
      $hello = "hello"; //
        return new Response($hello);
/*       return $this->render('base.html.twig');  // retour a une tamplate 
*/
        //return $this->redirectToRoute('redirectTo'); //nom de route de redirection qui va rediriger vers le path "hello" qui utilise HomeController avec la fonction hello
        //throw $this->createNotFoundException('error');
    }
    /** 
     * @Route("hello/{param}");
     */
    function hello(Request $request){
        /* echo "bonjour !! Reditrection test";
        die; */
/*         $title = "user";
        $users = ["jaafer", "ahmed", "moez", "adam"];
        return $this->render('hello.html.twig',["title"=>$title,"array"=>$users]); 
        var_dump($request->query->all());
        die;*/
        $params = $request->query->all();
        $string = "les params sont : \n";
        foreach($params as $key=>$value){
            $string = $string . '-'. $key . ':' . $value . '<br/>';
        }
        return new Response($string);

    }


    /** 
     * @Route("bonjour/{param}", requirements={"param"="\d+"}, methods={"POST"});
     */
    function bonjour($param){
        return new Response('hello: number'.$param);
    }

    /** 
     * @Route("action");
     */
    function helloAction(){
        return $this->render('base.html.twig');
    }

    /** 
     * @Route("hello/{name}", name="helloName");
     */
    function helloName($name){
        return new Response('hello'.$name);
    }

    /** 
     * @Route("localisation/{_local}");
     */
    function localisation(Request $request){
        $local= $request->getLocale();
        return new Response('hello, local '.$local);
    }

    /** 
     * @Route({"fr":"bonjour","en":"hi"});
     */
    function languepays(Request $request){
        $local= $request->getLocale();
        return new Response('hello, local '.$local);
    }

}


