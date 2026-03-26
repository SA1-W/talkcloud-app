<?php

class ProfileController extends MainController
{

    public function index()
    {
        $profile = new Profile();
        $profile->user_id = $_SESSION['user']['id'];
        $userProfile =  $profile->getByUserId();
        require_once __DIR__ . '/../../views/profile/index.php';
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['PUT'])) {
            $username = $_POST['username'];
            $gender = $_POST['gender'];
            $birth = $_POST['birth'];
            $country = $_POST['country'];
            $bio = $_POST['bio'];
            $user_id = $_POST['user_id'];

            $profile = new Profile();

            $profile->user_id = $user_id;
            $profile->username = $username;
            $profile->bio = $bio;
            $profile->country = $country;
            $profile->birth = $birth;
            $profile->gender = $gender;

            if ($profile->update()) {
                $_SESSION['msg'] = "Successfully Updated!";
                header("Location: /talkcloud/public/index.php?action=profile");
                exit;
            }
        }
    }
}
