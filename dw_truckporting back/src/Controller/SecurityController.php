<?php

namespace App\Controller;

use App\Entity\UserMgr\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/register", name="register", methods="post")
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        // IMP! To get JSON format from POST method
        $data = $request->getContent();
        $content = json_decode($data);

        $username = $content->username;
        $password = $content->password;
        $user = new User($username);
        $user->setPassword($encoder->encodePassword($user, $password));
        $em->persist($user);
        $em->flush();

        return new Response(sprintf('User %s successfully created', $user->getUsername()));
    }
    /**
     * @Route("/role", name="role", methods="post")
     */
    public function role(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        // IMP! To get JSON format from POST method
        $data = $request->getContent();
        $content = json_decode($data);
        $username = $content->username;
        $db_user = $em->getRepository(User::class)->findOneBy([
            'username' => $username,
        ]);
        return new JsonResponse( $db_user->getRoles());
    }

    /**
     * @Route("/state", name="get-state")
     */
    public function getState(Request $request){
        $em = $this->getDoctrine()->getManager();
        $data = $request->getContent();
        $content = json_decode($data);
        $username = $content->username;
        $db_user = $em->getRepository(User::class)->findOneBy([
            'username' => $username,
        ]);
        $state = $db_user->getState();
        return $this->json([
            "state" => $state
        ]);
    }
}
