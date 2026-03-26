<?php



class PostController extends MainController
{


    public function index()
    {
        $post = new Post();
        $post->user_id = $_SESSION['user']['id'];
        $posts = $post->getAll();
        require __DIR__ . '/../../views/post/index.php';
    }


    public function create()
    {
        require __DIR__ . '/../../views/post/create.php';
    }

    public function store()
    {
        if (empty($_POST['title']) || empty($_POST['body'])) {
            $_SESSION['msg'] = "All Field's is required!";
            header("Location: /talkcloud/public/index.php?action=post-create");
            exit;
        }

        $title = $_POST['title'];
        $body = $_POST['body'];
        $imagePath = null;

        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $fileTmpPath = $_FILES['image']['tmp_name'];
            $fileName = $_FILES['image']['name'];

            $newFileName = time() . '_' . basename($fileName);
            $uploadPath = __DIR__ . '/../../public/uploads/posts/' . $newFileName;

            if (move_uploaded_file($fileTmpPath, $uploadPath)) {
                $imagePath = 'uploads/posts/' . $newFileName;
            }
        }

        $post = new Post();

        $post->user_id = $_SESSION['user']['id'];
        $post->user_name = $_SESSION['user']['name'];
        $post->title = $title;
        $post->body = $body;
        $post->image = $imagePath;

        if ($post->create()) {
            $_SESSION['msg'] = "Successfully Created!";
            header("Location: /talkcloud/public/index.php?action=post-create");
            exit;
        }
    }
}
