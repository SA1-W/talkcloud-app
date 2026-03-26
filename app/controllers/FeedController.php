<?php


class FeedController extends MainController
{
    public function index()
    {
        $post = new Post();
        $posts = $post->getAllForFeed();
        require __DIR__ . '/../../views/feed/index.php';
    }
}
