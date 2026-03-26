<?php

require_once __DIR__ . '/../../config/connect.php';
User::$pdocopy = $pdo;



class User
{

    public $id;
    public $name;
    public $surname;
    public $email;
    public $password;

    public static $pdocopy;


    public function setPass($password)
    {
        $this->password = $password;
    }


    public function create()
    {
        $stmt = self::$pdocopy->prepare("INSERT INTO users (name, surname, email, password) 
       VALUES (:name, :surname, :email, :password)");
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":surname", $this->surname);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        if ($stmt->execute()) {
            return self::$pdocopy->lastInsertId();
        }

        return false;
    }

    public function attempt()
    {
        $stmt = self::$pdocopy->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $stmt->fetch();


        if (!$user) {
            return false;
        }

        if ($this->password !== $user->password) {
            return false;
        }

        return $user;
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        return true;
    }
}
