<?php include "includes/header.php" ?>


<div class="container">
    <div class="py-5">
        <div class="row">
            <div class="heading text-center mb-5">
                <h4>Welcome Back,</h4>
                <h1>Martin Alex</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <a href="javascript:void(0)" class="card-main">
                    <div class="card card-small text-center">
                        <img src="images/upload.png" class="card-img-top w-25 mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title m-0">Upload <br> Courses</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Course Title">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="wrap w-100">
                        <select class="form-control " aria-label=".form-select-sm example">
                            <option selected>Course Category</option>
                            <option value="Pre-school">Pre-school</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="wrap w-100">
                        <select class="form-control no-bg" aria-label=".form-select-sm example">
                            <option selected>Quiz Type</option>
                            <option value=""></option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea rows="5" class="form-control" placeholder="Course Description"></textarea>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-main btn-primary btn-block w-100">Button</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-main btn-outline-primary btn-block w-100"><i class="fas fa-plus-square"></i> Button</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formFile" class="form-label form-control upload-file"> Upload Video <i class="fas fa-upload"></i>
                        <input class="" type="file" id="formFile">
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="form-group">
                    <input class="form-control" type="date" >
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "includes/footer.php" ?>