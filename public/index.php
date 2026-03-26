<?php
session_start();


require_once __DIR__ . '/../app/controllers/MainController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/ProfileController.php';
require_once __DIR__ . '/../app/controllers/PostController.php';
require_once __DIR__ . '/../app/controllers/FeedController.php';
require_once __DIR__ . '/../app/models/User.php';
require_once __DIR__ . '/../app/models/Post.php';



//ROUTES

$action = $_GET['action'] ?? '';

switch ($action) {


    //Auth Routes

    case '':
        $authController = new AuthController();
        $authController->index();
        break;

    case 'sign-up':
        $authController = new AuthController();
        $authController->create();
        break;


    case 'store':
        $authController = new AuthController();
        $authController->store();
        break;

    case 'attempt':
        $authController = new AuthController();
        $authController->attempt();
        break;

    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;

    //Profile Routes

    case 'profile':
        $profileController = new ProfileController();
        $profileController->index();
        break;

    case 'update':
        $profileController = new ProfileController();
        $profileController->update();
        break;


    //Post Routes 


    case 'all-posts':
        $postController = new PostController();
        $postController->index();
        break;

    case 'post-create':
        $postController = new PostController();
        $postController->create();
        break;

    case 'post-store':
        $postController = new PostController();
        $postController->store();
        break;


    //test zone

    case 'feed':
        $feedController = new FeedController();
        $feedController->index();
        break;

    case 'test':
        require_once __DIR__ . '/../views/test.php';
        break;


    default:
        require_once __DIR__ . '/../views/error.php';
        break;
}
