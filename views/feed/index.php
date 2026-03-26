<?php require __DIR__ . '/../layouts/header.php'; ?>

<div class="col-lg-8 row m-0 p-0">

    <?php foreach ($posts as $post): ?>
        <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
                <div class="card-body">
                    <div class="user-post-data">
                        <div class="d-flex justify-content-between">
                            <div class="me-3">
                                <img class="rounded-circle img-fluid" src="../assets/images/user/01.jpg" alt="">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <h5 class="mb-0 d-inline-block"><?= $post->user_name ?></h5>
                                        <p class="mb-0 text-primary"><?= $post->created_at ?></p>
                                    </div>
                                    <div class="card-post-toolbar">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                <i class="ri-more-fill"></i>
                                            </span>
                                            <div class="dropdown-menu m-0 p-0">
                                                <a class="dropdown-item p-3" href="#">
                                                    <div class="d-flex align-items-top">
                                                        <div class="h4">
                                                            <i class="ri-save-line"></i>
                                                        </div>
                                                        <div class="data ms-2">
                                                            <h6>Save Post</h6>
                                                            <p class="mb-0">Add this to your saved items</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                    <div class="d-flex align-items-top">
                                                        <i class="ri-close-circle-line h4"></i>
                                                        <div class="data ms-2">
                                                            <h6>Hide Post</h6>
                                                            <p class="mb-0">See fewer posts like this.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                    <div class="d-flex align-items-top">
                                                        <i class="ri-user-unfollow-line h4"></i>
                                                        <div class="data ms-2">
                                                            <h6>Unfollow User</h6>
                                                            <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                    <div class="d-flex align-items-top">
                                                        <i class="ri-notification-line h4"></i>
                                                        <div class="data ms-2">
                                                            <h6>Notifications</h6>
                                                            <p class="mb-0">Turn on notifications for this post</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h4><?= $post->title ?></h4>
                    </div>
                    <div class="mt-3">
                        <p><?= $post->body ?></p>
                    </div>
                    <?php if (!empty($post->image)): ?>
                        <div class="user-post">
                            <div class=" d-grid grid-rows-2 grid-flow-col gap-3">
                                <div class="row-span-2 row-span-md-1">
                                    <img src="/talkcloud/public/<?= $post->image ?>" alt="post-image" class="img-fluid rounded w-100">
                                </div>
                                <!-- <div class="row-span-1">
                                <img src="../assets/images/page-img/p1.jpg" alt="post-image" class="img-fluid rounded w-100">
                            </div>
                            <div class="row-span-1 ">
                                <img src="../assets/images/page-img/p3.jpg" alt="post-image" class="img-fluid rounded w-100">
                            </div> -->
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
<!-- <div class="col-lg-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Stories</h4>
            </div>
        </div>
        <div class="card-body">
            <ul class="media-story list-inline m-0 p-0">
                <li class="d-flex mb-3 align-items-center">
                    <i class="ri-add-line"></i>
                    <div class="stories-data ms-3">
                        <h5>Creat Your Story</h5>
                        <p class="mb-0">time to story</p>
                    </div>
                </li>
                <li class="d-flex mb-3 align-items-center active">
                    <img src="../assets/images/page-img/s2.jpg" alt="story-img" class="rounded-circle img-fluid">
                    <div class="stories-data ms-3">
                        <h5>Anna Mull</h5>
                        <p class="mb-0">1 hour ago</p>
                    </div>
                </li>
                <li class="d-flex mb-3 align-items-center">
                    <img src="../assets/images/page-img/s3.jpg" alt="story-img" class="rounded-circle img-fluid">
                    <div class="stories-data ms-3">
                        <h5>Ira Membrit</h5>
                        <p class="mb-0">4 hour ago</p>
                    </div>
                </li>
                <li class="d-flex align-items-center">
                    <img src="../assets/images/page-img/s1.jpg" alt="story-img" class="rounded-circle img-fluid">
                    <div class="stories-data ms-3">
                        <h5>Bob Frapples</h5>
                        <p class="mb-0">9 hour ago</p>
                    </div>
                </li>
            </ul>
            <a href="#" class="btn btn-primary d-block mt-3">See All</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Events</h4>
            </div>
            <div class="card-header-toolbar d-flex align-items-center">
                <div class="dropdown">
                    <div class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                        <i class="ri-more-fill h4"></i>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
                        <a class="dropdown-item" href="#"><i class="ri-eye-fill me-2"></i>View</a>
                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill me-2"></i>Delete</a>
                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill me-2"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="ri-printer-fill me-2"></i>Print</a>
                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill me-2"></i>Download</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <ul class="media-story list-inline m-0 p-0">
                <li class="d-flex mb-4 align-items-center ">
                    <img src="../assets/images/page-img/s4.jpg" alt="story-img" class="rounded-circle img-fluid">
                    <div class="stories-data ms-3">
                        <h5>Web Workshop</h5>
                        <p class="mb-0">1 hour ago</p>
                    </div>
                </li>
                <li class="d-flex align-items-center">
                    <img src="../assets/images/page-img/s5.jpg" alt="story-img" class="rounded-circle img-fluid">
                    <div class="stories-data ms-3">
                        <h5>Fun Events and Festivals</h5>
                        <p class="mb-0">1 hour ago</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Upcoming Birthday</h4>
            </div>
        </div>
        <div class="card-body">
            <ul class="media-story list-inline m-0 p-0">
                <li class="d-flex mb-4 align-items-center">
                    <img src="../assets/images/user/01.jpg" alt="story-img" class="rounded-circle img-fluid">
                    <div class="stories-data ms-3">
                        <h5>Anna Sthesia</h5>
                        <p class="mb-0">Today</p>
                    </div>
                </li>
                <li class="d-flex align-items-center">
                    <img src="../assets/images/user/02.jpg" alt="story-img" class="rounded-circle img-fluid">
                    <div class="stories-data ms-3">
                        <h5>Paul Molive</h5>
                        <p class="mb-0">Tomorrow</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Suggested Pages</h4>
            </div>
            <div class="card-header-toolbar d-flex align-items-center">
                <div class="dropdown">
                    <div class="dropdown-toggle" id="dropdownMenuButton01" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                        <i class="ri-more-fill h4"></i>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                        <a class="dropdown-item" href="#"><i class="ri-eye-fill me-2"></i>View</a>
                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill me-2"></i>Delete</a>
                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill me-2"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="ri-printer-fill me-2"></i>Print</a>
                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill me-2"></i>Download</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <ul class="suggested-page-story m-0 p-0 list-inline">
                <li class="mb-3">
                    <div class="d-flex align-items-center mb-3">
                        <img src="../assets/images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                        <div class="stories-data ms-3">
                            <h5>Iqonic Studio</h5>
                            <p class="mb-0">Lorem Ipsum</p>
                        </div>
                    </div>
                    <img src="../assets/images/small/img-1.jpg" class="img-fluid rounded" alt="Responsive image">
                    <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line me-2"></i> Like Page</a></div>
                </li>
                <li class="">
                    <div class="d-flex align-items-center mb-3">
                        <img src="../assets/images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                        <div class="stories-data ms-3">
                            <h5>Cakes & Bakes </h5>
                            <p class="mb-0">Lorem Ipsum</p>
                        </div>
                    </div>
                    <img src="../assets/images/small/img-2.jpg" class="img-fluid rounded" alt="Responsive image">
                    <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line me-2"></i> Like Page</a></div>
                </li>
            </ul>
        </div>
    </div>
</div> -->

<?php require __DIR__ . '/../layouts/footer.php'; ?>