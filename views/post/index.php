<?php require __DIR__ . '/../../views/layouts/header.php'; ?>


<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title"><?= $_SESSION['user']['email'] ?>'s Posts</h4>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">image</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?= $post->title ?></td>
                        <td><?= $post->body ?></td>
                        <td><?= $post->image ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>





<?php require __DIR__ . '/../../views/layouts/footer.php'; ?>