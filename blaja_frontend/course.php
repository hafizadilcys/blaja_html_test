<?php include "includes/header.php" ?>
<!-- Dashboard Basics -->
<div class="dashboard inner-page">
    <?php include "includes/navbars.php" ?>


    <div class="container dashboard-page">
        <div class="py-5">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="course-name">
                    <h3 class="text-white">Course Name Here</h3>
                </div>
                <div class="dashboard-btn">
                    <a href="javascript:void(0)" class="btn btn-site-red py-2 px-5 rounded-pill">Enroll</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 mb-3 mb-md-0">
                    <div class="sidebar-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="l1" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-ellipsis-h"></i> Lecture - 1</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="q1" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="far fa-check-circle"></i> Quiz - 1</button>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="l2" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false" disabled><i class="fas fa-lock"></i> Lecture - 2</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="q2" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" disabled><i class="fas fa-lock"></i> Quiz - 2</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="ratio ratio-16x9 course-video">
                        <iframe  src="https://www.youtube.com/embed/5MgBikgcWnY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                            <div class="dashboard-btn mt-4 text-md-end text-center">
                                <a href="javascript:void(0)" class="btn btn-light rounded-pill py-2 px-5 me-0 me-md-3">Cancel</a>
                                <a href="javascript:void(0)" class="btn btn-site-red rounded-pill py-2 px-5">Next</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row align-items-center mb-4">
                                <div class="col-md-12">
                                    <div class="questions-area p-3 bg-white ">
                                        <div class="question mb-3">
                                            <div class="question-left">
                                                <p><b>Question 1:</b></p>
                                            </div>
                                            <div class="question-right w-100">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore Lorea magna aliquyam erat, sed diam voluptua.</p>
                                            </div>
                                        </div>
                                        <div class="question mb-0">
                                            <div class="question-left">
                                                <p><b>Choices:</b></p>
                                            </div>
                                            <div class="question-right">
                                                <ul class="list-unstyled">
                                                    <li class="mb-2"><input class="form-check-input" type="radio" value="" name="mcqs" checked> A) Lorem Ipsum</li>
                                                    <li class="mb-2"><input class="form-check-input" type="radio" value="" name="mcqs"> B) Lorem Ipsum</li>
                                                    <li class="mb-2"><input class="form-check-input" type="radio" value="" name="mcqs"> C) Lorem Ipsum</li>
                                                    <li class="mb-2"><input class="form-check-input" type="radio" value="" name="mcqs"> D) Lorem Ipsum</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-4">
                                <div class="col-md-12">
                                    <div class="questions-area p-3 bg-white ">
                                        <div class="question mb-3">
                                            <div class="question-left">
                                                <p><b>Question 1:</b></p>
                                            </div>
                                            <div class="question-right w-100">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore Lorea magna aliquyam erat, sed diam voluptua.</p>
                                            </div>
                                        </div>
                                        <div class="question mb-0">
                                            <div class="question-left">
                                                <p><b>Choices:</b></p>
                                            </div>
                                            <div class="question-right">
                                                <ul class="list-unstyled">
                                                    <li class="mb-2"><input class="form-check-input" type="radio" value="" name="trueFalse" checked> A) True</li>
                                                    <li class="mb-2"><input class="form-check-input" type="radio" value="" name="trueFalse"> B) False</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-4">
                                <div class="col-md-12">
                                    <div class="questions-area p-3 bg-white ">
                                        <div class="question mb-3">
                                            <div class="question-left">
                                                <p><b>Question 1:</b></p>
                                            </div>
                                            <div class="question-right w-100">
                                                <p>Write a short note on "Lorem Ipsum Vertia".</p>
                                            </div>
                                        </div>
                                        <div class="question mb-0">
                                            <div class="question-left">
                                                <p><b>Answer:</b></p>
                                            </div>
                                            <div class="question-right">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-4">
                                <div class="col-md-12">
                                    <div class="questions-area p-3 bg-white ">
                                        <div class="question mb-3">
                                            <div class="question-left">
                                                <p><b>Question 1:</b></p>
                                            </div>
                                            <div class="question-right w-100">
                                                <p>Write a Essay on "Lorem Ipsum Vertia".</p>
                                            </div>
                                        </div>
                                        <div class="question mb-0">
                                            <div class="question-left">
                                                <p><b>Answer:</b></p>
                                            </div>
                                            <div class="question-right">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-btn mt-4 text-md-end text-center">
                                <a href="javascript:void(0)" class="btn btn-light rounded-pill py-2 px-5 me-0 me-md-3">Cancel</a>
                                <a href="javascript:void(0)" class="btn btn-site-red rounded-pill py-2 px-5">Submit</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include "includes/footer.php" ?>