<?php require __DIR__ . '/../layouts/header.php'; ?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-9 ps-4">
                <div class="tab-pane" id="v-pills-form-tab" role="tabpanel" aria-labelledby="v-pills-form-tab">
                    <h4>Post Create</h4>
                    <hr>
                    <form action="/talkcloud/public/index.php?action=post-store" method="POST" enctype="multipart/form-data">

                        <div class=" row align-items-center">
                            <div class="form-group col-sm-6">
                                <label for="uname" class="form-label">Post title:</label>
                                <input name="title" type="text" class="form-control" id="uname">
                            </div>

                            <div class="form-group col-sm-12">
                                <label class="form-label">Description:</label>
                                <textarea class="form-control" required name="body"></textarea>
                            </div>

                            <div class="form-group col-sm-12">
                                <label class="form-label">Post Image:</label>
                                <br>
                                <input name="image" type="file">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button type="reset" class="btn bg-soft-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<?php require __DIR__ . '/../layouts/footer.php'; ?>