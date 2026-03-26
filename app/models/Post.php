<?php

require_once __DIR__ . '/../../config/connect.php';
Post::$pdocopy = $pdo;


class Post
{
    public $id;
    public $user_id;
    public $user_name;
    public $title;
    public $body;
    public $image;
    public $created_at;


    public static $pdocopy;


    public function getAll()
    {
        $stmt = self::$pdocopy->prepare("SELECT * FROM posts WHERE user_id = :user_id");
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, Post::class);

        return $posts;
    }



    public function create()
    {
        $stmt = self::$pdocopy->prepare("INSERT INTO posts (user_id, user_name, title, body, image) VALUES (:user_id, :user_name, :title, :body, :image)");
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":user_name", $this->user_name);
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":body", $this->body);
        $stmt->bindParam(":image", $this->image);
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function getAllForFeed()
    {
        $stmt = self::$pdocopy->prepare("SELECT * FROM posts ORDER BY RAND()");
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, Post::class);

        return $posts;
    }
}
