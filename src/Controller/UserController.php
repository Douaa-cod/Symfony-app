<?php 
namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserType;


class UserController extends AbstractController
{
    /** 
     * @Route("login");
     */
    public function createUserForm(Request $request)
    {
        // create a task object and initializes some data for this example
        $user = new User();

        // applay to form created in UserType.php       
        $form = $this->createForm(UserType::class, $user);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            return new response('Formulaire validé');
        }
        return $this->render('form.html.twig', ['userForm'=>$form->createView()]);


    }
}