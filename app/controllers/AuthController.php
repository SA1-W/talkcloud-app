<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Profile.php';


class AuthController
{
    public function index()
    {
        require_once __DIR__ . '/../../views/auth/index.php';
    }

    public function create()
    {
        //
        require_once __DIR__ . "/../../views/auth/signup.php";
    }

    public function store()
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeatpass = $_POST['repeatpass'];

        if (empty($name) || empty($surname) || empty($email) || empty($password) || empty($repeatpass)) {
            $_SESSION['msg'] = "All Field's is required!";
            header("Location: /talkcloud/public/index.php?action=create");
            exit;
        }

        if ($password !== $repeatpass) {
            $_SESSION['msg'] = "Password don't match!";
            header("Location: /talkcloud/public/index.php?action=create");
            exit;
        }

        $user = new User();

        $user->name = $name;
        $user->surname = $surname;
        $user->email = $email;
        $user->setPass($password);

        $userId = $user->create();

        if ($userId) {

            $profile = new Profile();
            $profile->user_id = $userId;
            $profile->create();

            $_SESSION['msg'] = "Created Succesfully";
            header("Location: /talkcloud/public/index.php?action=");
            exit;
        }
    }

    public function attempt()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            $_SESSION['msg'] = "All Field's is required!";
            header("Location: /talkcloud/public/index.php?action=");
            exit;
        }

        $user = new User();
        $user->email = $email;
        $user->password = $password;

        $user = $user->attempt();

        if (!$user) {
            $_SESSION['msg'] = "Invalid email or password";
            header("Location: /talkcloud/public/index.php?action=");
            exit;
        }

        $_SESSION['user'] = [
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name
        ];

        header("Location: /talkcloud/public/index.php?action=profile");
        exit;
    }

    public function logout()
    {
        $user = new User();
        if ($user->logout()) {
            header("Location: /talkcloud/public/index.php");
            exit;
        }
    }
}
