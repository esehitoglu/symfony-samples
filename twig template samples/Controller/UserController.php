<?php

// src/Controller/UserController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    // ...
	/**
     * @Route("/notifications", name="notifications")
     */
    public function notifications(): Response
    {
        // get the user information and notifications somehow
        $userFirstName = 'Ensar';
        $userNotifications = [
        	array('name'=>'Twig syntax', 'date'=>'1992'),
        	array('name'=>'Sublime 3', 'date'=>'2022')
        ];

        // the template path is the relative file path from `templates/user/notifications.html.twig`
        return $this->render('user/notifications.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }
}