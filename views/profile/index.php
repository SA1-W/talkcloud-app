<?php require __DIR__ . '/../layouts/header.php' ?>

<div class="col-sm-12">

    <div class="card">
        <div class="card-body p-0">
            <div class="user-tabing">
                <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                    <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link active" href="#pills-about-tab" data-bs-toggle="pill" data-bs-target="#about" role="button">About</a>
                    </li>
                    <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link" href="#pills-friends-tab" data-bs-toggle="pill" data-bs-target="#friends" role="button">Friends</a>
                    </li>
                    <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill" data-bs-target="#photos" role="button">Posts</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="about" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                                <li>
                                    <a class="nav-link active" href="#v-pills-basicinfo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-basicinfo-tab" role="button">Contact and Basic Info</a>
                                </li>

                                <li>
                                    <a class="nav-link" href="#v-pills-details-tab" data-bs-toggle="pill" data-bs-target="#v-pills-details-tab" role="button">Details About You</a>
                                </li>

                                <li>
                                    <a class="nav-link" href="#v-pills-form-tab" data-bs-toggle="pill" data-bs-target="#v-pills-form-tab" role="button">Edit Profile</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9 ps-4">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="v-pills-basicinfo-tab" role="tabpanel" aria-labelledby="v-pills-basicinfo-tab">
                                    <h4><?= $userProfile->username ?>'s Profile</h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-3">
                                            <h6>Name</h6>
                                        </div>
                                        <div class="col-9">
                                            <p class="mb-0"><?= $userProfile->name ?></p>
                                        </div>
                                        <div class="col-3">
                                            <h6>Surname</h6>
                                        </div>
                                        <div class="col-9">
                                            <p class="mb-0"><?= $userProfile->surname ?></p>
                                        </div>
                                        <div class="col-3">
                                            <h6>Email</h6>
                                        </div>
                                        <div class="col-9">
                                            <p class="mb-0"><?= $userProfile->email ?></p>
                                        </div>
                                        <div class="col-3">
                                            <h6>Country</h6>
                                        </div>
                                        <div class="col-9">
                                            <p class="mb-0"><?= $userProfile->country ?></p>
                                        </div>
                                        <div class="col-3">
                                            <h6>Birth Date</h6>
                                        </div>
                                        <div class="col-9">
                                            <p class="mb-0"><?= $userProfile->birth ?></p>
                                        </div>
                                        <div class="col-3">
                                            <h6>Gender</h6>
                                        </div>
                                        <div class="col-9">
                                            <p class="mb-0"><?= $userProfile->gender ?></p>
                                        </div>

                                    </div>

                                </div>


                                <div class="tab-pane fade" id="v-pills-details-tab" role="tabpanel" aria-labelledby="v-pills-details-tab">
                                    <h4 class="mb-3">About You</h4>
                                    <hr>
                                    <p><?= $userProfile->bio ?></p>
                                </div>

                                <div class="tab-pane fade" id="v-pills-form-tab" role="tabpanel" aria-labelledby="v-pills-form-tab">
                                    <h4>Edit Profile</h4>
                                    <hr>
                                    <form action="/talkcloud/public/index.php?action=update" method="POST" enctype="multipart/form-data">
                                        <!--   <div class="form-group row align-items-center">
                                            <div class="col-md-12">
                                                <div class="profile-img-edit">
                                                    <img class="profile-pic" src="../assets/images/user/11.png" alt="profile-pic">
                                                    <div class="p-image">
                                                        <i class="ri-pencil-line upload-button text-white"></i>
                                                        <input class="file-upload" type="file" accept="image/*" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class=" row align-items-center">
                                            <!--    <div class="form-group col-sm-6">
                                                <label for="fname" class="form-label">First Name:</label>
                                                <input type="text" class="form-control" id="fname" placeholder="firstname">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="lname" class="form-label">Last Name:</label>
                                                <input type="text" class="form-control" id="lname" placeholder="lastname">
                                            </div> -->
                                            <div class="form-group col-sm-6">
                                                <label for="uname" class="form-label">User Name:</label>
                                                <input name="username" type="text" class="form-control" id="uname" placeholder="username" value="<?= $userProfile->username ?>">
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label class="form-label d-block">Gender:</label>
                                                <div class="form-check form-check-inline">
                                                    <input name="gender" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio10" value="Male">
                                                    <label class="form-check-label" for="inlineRadio10"> Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input required name="gender" class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio11" value="Female">
                                                    <label class="form-check-label" for="inlineRadio11">Female</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="dob" class="form-label">Date Of Birth:</label>
                                                <input name="birth" class="form-control" id="dob" placeholder="1984-01-24" value="<?= $userProfile->birth ?>">
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label class="form-label">Country:</label>
                                                <select name="country" class="form-select" aria-label="Default select example 3">
                                                    <option>USA</option>
                                                    <option>Canada</option>
                                                    <option>Turkey</option>
                                                    <option selected="">Uzbekistan</option>
                                                    <option>South Korea</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-sm-12">
                                                <label class="form-label">About You:</label>
                                                <textarea class="form-control" required name="bio"><?= $userProfile->bio ?></textarea>
                                            </div>

                                        </div>
                                        <input name="user_id" type="hidden" value="<?= $userProfile->user_id ?>">
                                        <input name="PUT" type="hidden">
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button type="reset" class="btn bg-soft-danger">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="friends" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <h2>Friends</h2>
                    <div class="friend-list-tab mt-2">
                        <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                            <li>
                                <a class="nav-link active" data-bs-toggle="pill" href="#pill-all-friends" data-bs-target="#all-feinds">All Friends</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#pill-recently-add" data-bs-target="#recently-add">Recently Added</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#pill-closefriends" data-bs-target="#closefriends"> Close friends</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#pill-home" data-bs-target="#home-town"> Home/Town</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#pill-following" data-bs-target="#following">Following</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="row">

                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <div class="iq-friendlist-block">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#">
                                                            <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                        </a>
                                                        <div class="friend-info ms-3">
                                                            <h5>Petey Cruiser</h5>
                                                            <p class="mb-0">15 friends</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton01" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                                <i class="ri-check-line me-1 text-white"></i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                                <a class="dropdown-item" href="#">Get Notification</a>
                                                                <a class="dropdown-item" href="#">Close Friend</a>
                                                                <a class="dropdown-item" href="#">Unfollow</a>
                                                                <a class="dropdown-item" href="#">Unfriend</a>
                                                                <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="recently-add" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="row">

                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <div class="iq-friendlist-block">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#">
                                                            <img src="../assets/images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                        </a>
                                                        <div class="friend-info ms-3">
                                                            <h5>Otto Matic</h5>
                                                            <p class="mb-0">4 friends</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton31" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                                <i class="ri-check-line me-1 text-white"></i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton31">
                                                                <a class="dropdown-item" href="#">Get Notification</a>
                                                                <a class="dropdown-item" href="#">Close Friend</a>
                                                                <a class="dropdown-item" href="#">Unfollow</a>
                                                                <a class="dropdown-item" href="#">Unfriend</a>
                                                                <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="closefriends" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="row">

                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <div class="iq-friendlist-block">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#">
                                                            <img src="../assets/images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                        </a>
                                                        <div class="friend-info ms-3">
                                                            <h5>Bud Wiser</h5>
                                                            <p class="mb-0">32 friends</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton39" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                                <i class="ri-check-line me-1 text-white"></i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton39">
                                                                <a class="dropdown-item" href="#">Get Notification</a>
                                                                <a class="dropdown-item" href="#">Close Friend</a>
                                                                <a class="dropdown-item" href="#">Unfollow</a>
                                                                <a class="dropdown-item" href="#">Unfriend</a>
                                                                <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="home-town" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="row">

                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <div class="iq-friendlist-block">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#">
                                                            <img src="../assets/images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                        </a>
                                                        <div class="friend-info ms-3">
                                                            <h5>Paul Molive</h5>
                                                            <p class="mb-0">14 friends</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton49" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                                <i class="ri-check-line me-1 text-white"></i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton49">
                                                                <a class="dropdown-item" href="#">Get Notification</a>
                                                                <a class="dropdown-item" href="#">Close Friend</a>
                                                                <a class="dropdown-item" href="#">Unfollow</a>
                                                                <a class="dropdown-item" href="#">Unfriend</a>
                                                                <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="following" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <div class="iq-friendlist-block">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#">
                                                            <img src="../assets/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                        </a>
                                                        <div class="friend-info ms-3">
                                                            <h5>Maya Didas</h5>
                                                            <p class="mb-0">20 friends</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle btn btn-secondary me-2" id="dropdownMenuButton54" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                                                                <i class="ri-check-line me-1 text-white"></i> Friend
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton54">
                                                                <a class="dropdown-item" href="#">Get Notification</a>
                                                                <a class="dropdown-item" href="#">Close Friend</a>
                                                                <a class="dropdown-item" href="#">Unfollow</a>
                                                                <a class="dropdown-item" href="#">Unfriend</a>
                                                                <a class="dropdown-item" href="#">Block</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="photos" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <h2>Photos</h2>
                    <div class="friend-list-tab mt-2">
                        <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                            <li>
                                <a class="nav-link active" data-bs-toggle="pill" href="#pill-photosofyou" data-bs-target="#photosofyou">Photos of You</a>
                            </li>
                            <li>
                                <a class="nav-link" data-bs-toggle="pill" href="#pill-your-photos" data-bs-target="#your-photos">Your Photos</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="d-grid gap-2 d-grid-template-1fr-13">
                                        <div class="">
                                            <div class="user-images position-relative overflow-hidden">
                                                <a href="#">
                                                    <img src="../assets/../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                                </a>
                                                <div class="image-hover-data">
                                                    <div class="product-elements-icon">
                                                        <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="your-photos" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="d-grid gap-2 d-grid-template-1fr-13 ">
                                        <div class="">
                                            <div class="user-images position-relative overflow-hidden">
                                                <a href="#">
                                                    <img src="../assets/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                                </a>
                                                <div class="image-hover-data">
                                                    <div class="product-elements-icon">
                                                        <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php require __DIR__ . '/../layouts/footer.php' ?>