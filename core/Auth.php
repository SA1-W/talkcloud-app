<?php


class Auth
{
    public static function AuthCheck()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /talkcloud/public/index.php");
            exit();
        }
    }
}
