<?php

require __DIR__ . '/../../config/connect.php';
Profile::$pdocopy = $pdo;
// $pdocopy = new Profile();
// $pdocopy->pdocopy = $pdo;

class Profile
{
    public $id;
    public $user_id;
    //////
    public $username;
    public $bio;
    public $country;
    public $birth;
    public $gender;
    //////
    public $name;
    public $surname;
    public $email;

    public static $pdocopy;


    public function create()
    {
        $stmt = self::$pdocopy->prepare("INSERT INTO profiles (user_id) VALUES (:user_id)");
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->execute();
    }

    public function getByUserId()
    {
        $stmt = self::$pdocopy->prepare("SELECT users.name, users.surname, users.email, profiles.user_id, profiles.username, profiles.country, profiles.gender, profiles.birth, profiles.bio FROM profiles 
        JOIN users ON profiles.user_id = users.id WHERE profiles.user_id = :user_id");
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Profile::class);
        $userProfile = $stmt->fetch();

        return $userProfile;
    }

    public function update()
    {
        $stmt = self::$pdocopy->prepare("UPDATE profiles SET username = :username, bio = :bio,
        country = :country, birth = :birth, gender = :gender WHERE user_id = :user_id");

        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":bio", $this->bio);
        $stmt->bindParam(":country", $this->country);
        $stmt->bindParam(":birth", $this->birth);
        $stmt->bindParam(":gender", $this->gender);

        $stmt->bindParam(":user_id", $this->user_id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
