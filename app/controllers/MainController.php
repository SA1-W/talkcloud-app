<?php

require_once __DIR__ . '/../../core/Auth.php';

class MainController
{
    public function __construct()
    {
        Auth::AuthCheck();
    }
}
