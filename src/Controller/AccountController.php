<?php

namespace App\Controller;

use App\Entity\User;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @IsGranted("ROLE_USER")
 */

class AccountController extends BaseController
{
    /**
     * @Route("/account", name="app_account")
     */
    public function index(LoggerInterface $loger): Response
    {

        $loger->debug('Checke account for the user' . $this->getUser()->getEmail());

        return $this->render('account/index.html.twig');
    }


    /**
     * @Route("/api/account", name="api_account")
     */
    public function accountApi()
    {


        $users = $this->getUser();

        return $this->json($users, 200, [], ['groups' => ['main']]);
    }
}