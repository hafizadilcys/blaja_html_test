<?php include "includes/header.php" ?>


<div class="container upload-courses">
    <div class="py-5">
        <div class="row">
            <div class="heading mb-5">
                <h3>Course Details</h3>
            </div>
        </div>
        <div class="row mb-1 mb-md-4">
            <div class="col-md-6">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Course Title">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="wrap w-100">
                        <select class="form-control " aria-label=".form-select-sm example">
                            <option selected>Course Category</option>
                            <option value="Pre-school">Pre-school</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="mb-3">
                    <textarea rows="5" class="form-control" placeholder="Course Description"></textarea>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12 d-flex justify-content-end align-items-center">
                <button type="submit" class="btn btn-main btn-outline-primary me-2" id="addLectureBtn"><i
                        class="fas fa-plus-square"></i> Add Lectures</button>
                <button type="submit" class="btn btn-main btn-primary ">Publish Course</button>

            </div>
        </div>
        <hr class="my-3">


        <div id="addLectureDiv" style="display: none;">
            <div class="row mb-4">
                <div class="col-md-12">
                    <h3>Lecture - 3</h3>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Lecture Title">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Description">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="formFile" class="form-label form-control upload-file"> Upload Video <i
                                class="fas fa-upload"></i>
                            <input class="" type="file" id="formFile">
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="wrap w-100">
                            <select class="form-control quizType" aria-label="form-select-sm example" id="">
                                <option selected>Quiz Type</option>
                                <option value="mcqs">M.C.Q's</option>
                                <option value="true_false">True/ False</option>
                                <option value="short_answers">Short Answers</option>
                                <option value="essay">Essay</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <div class="mark-btn d-flex">
                            <button type="submit" class="btn btn-main btn-primary quizTypeBtn btn-block w-100 me-3"><i class="fas fa-plus"></i>
                                Quiz</button>
                            <button type="submit" class="btn btn-main btn-outline-primary btn-block w-100"
                                id='removeLectureBtn'> <i class="fas fa-trash"></i> Lecture</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mcqs" style="display:none;">
                <div class="row align-items-center mb-4">
                    <div class="col-md-12">
                        <div class="questions-area p-3 bg-white ">
                            <div class="question mb-3 align-items-center">
                                <div class="question-left">
                                    <p><b>Question 1:</b></p>
                                </div>
                                <div class="question-right w-100">
                                    <input type="text" class="w-100" placeholder="Enter Your Question Here...">
                                </div>
                            </div>
                            <div class="question mb-0">
                                <div class="question-left">
                                    <p><b>Choices:</b></p>
                                </div>
                                <div class="question-right">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><input class="form-check-input" type="radio" value=""
                                                name="mcqs"> A) <input type="text" placeholder="Enter Choice..."></li>
                                        <li class="mb-2"><input class="form-check-input" type="radio" value=""
                                                name="mcqs"> B) <input type="text" placeholder="Enter Choice..."></li>
                                        <li class="mb-2"><input class="form-check-input" type="radio" value=""
                                                name="mcqs"> C) <input type="text" placeholder="Enter Choice..."></li>
                                        <li class="mb-2"><input class="form-check-input" type="radio" value=""
                                                name="mcqs"> D) <input type="text" placeholder="Enter Choice..."></li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between marks-area">
                                <div class="col-md-6 mb-3 mb-md-0  mark-left">
                                    <h3>Question Marks:</h3>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6  mark-right">
                                    <div class="mark-btn d-flex">
                                        <button type="submit"
                                            class="btn btn-main btn-outline-primary btn-block w-100 me-2 removeQuizBtn">
                                            Remove</button>
                                        <button type="submit"
                                            class="btn btn-main btn-outline-primary btn-block w-100 me-2"> Save</button>
                                        <button type="submit" class="btn btn-main btn-outline-primary btn-block w-100">
                                            Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="trueFalse" style="display:none;">
                <div class="row align-items-center mb-4">
                    <div class="col-md-12">
                        <div class="questions-area p-3 bg-white">
                            <div class="question mb-3 align-items-center">
                                <div class="question-left">
                                    <p><b>Question 1:</b></p>
                                </div>
                                <div class="question-right  w-100">
                                    <input type="text" class="w-100" placeholder="Enter Your Question Here...">
                                </div>
                            </div>
                            <div class="question mb-0">
                                <div class="question-left">
                                    <p><b>Choices:</b></p>
                                </div>
                                <div class="question-right">
                                    <ul class="list-unstyled">
                                        <li><input class="form-check-input" type="radio" value="" name="trueFalse"> A)
                                            True</li>
                                        <li><input class="form-check-input" type="radio" value="" name="trueFalse"> B)
                                            False</li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between marks-area">
                                <div class="col-md-6 mb-3 mb-md-0  mark-left">
                                    <h3>Question Marks:</h3>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6  mark-right">
                                    <div class="mark-btn d-flex">
                                        <button type="submit"
                                            class="btn btn-main btn-outline-primary btn-block w-100 me-2 removeQuizBtn">
                                            Remove</button>
                                        <button type="submit"
                                            class="btn btn-main btn-outline-primary btn-block w-100 me-2"> Save</button>
                                        <button type="submit" class="btn btn-main btn-outline-primary btn-block w-100">
                                            Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="shortAnswers" style="display:none;">
                <div class="row align-items-center mb-4">
                    <div class="col-md-12">
                        <div class="questions-area p-3 bg-white">
                            <div class="question mb-3 align-items-center">
                                <div class="question-left">
                                    <p><b>Question 1:</b></p>
                                </div>
                                <div class="question-right w-100">
                                    <input type="text" class="w-100" placeholder="Enter Your Question Here...">
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between marks-area">
                                <div class="col-md-6 mb-3 mb-md-0  mark-left">
                                    <h3>Question Marks:</h3>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6  mark-right">
                                    <div class="mark-btn d-flex">
                                        <button type="submit"
                                            class="btn btn-main btn-outline-primary btn-block w-100 me-2 removeQuizBtn">
                                            Remove</button>
                                        <button type="submit"
                                            class="btn btn-main btn-outline-primary btn-block w-100 me-2"> Save</button>
                                        <button type="submit" class="btn btn-main btn-outline-primary btn-block w-100">
                                            Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="essay" style="display:none;">
                <div class="row align-items-center mb-4">
                    <div class="col-md-12">
                        <div class="questions-area p-3 bg-white">
                            <div class="question mb-3 align-items-center">
                                <div class="question-left">
                                    <p><b>Question 1:</b></p>
                                </div>
                                <div class="question-right w-100">
                                    <input type="text" class="w-100" placeholder="Enter Your Question Here...">
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between marks-area">
                                <div class="col-md-6 mb-3 mb-md-0  mark-left">
                                    <h3>Question Marks:</h3>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6  mark-right">
                                    <div class="mark-btn d-flex">
                                        <button type="submit"
                                            class="btn btn-main btn-outline-primary btn-block w-100 me-2 removeQuizBtn">
                                            Remove</button>
                                        <button type="submit"
                                            class="btn btn-main btn-outline-primary btn-block w-100 me-2"> Save</button>
                                        <button type="submit" class="btn btn-main btn-outline-primary btn-block w-100">
                                            Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
        </div>


        <h3 class="mb-3">All Lectures</h3>
        <div class="mb-5">
            <!-- <div class="row align-items-center mb-3">
                <div class="col-md-12">
                    <div class="lectures-row px-3 py-2 bg-white">
                        <div class="lecture-left">
                            <p class="m-0"><a href="javascript:void(0)" class="btn icon-button icon-button-sm btn-sm rounded-circle"><i class="fas fa-bars"></i></a> Lecture - 1: Fundamental of IT & Infrastructure</p>
                        </div>
                        <div class="lecture-right">
                            <a href="javascript:void(0)" class="btn icon-button"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-4">
                <div class="col-md-12">
                    <div class="lectures-row px-3 py-2 bg-white">
                        <div class="lecture-left">
                            <p class="m-0"><a href="javascript:void(0)" class="btn icon-button icon-button-sm btn-sm rounded-circle"><i class="fas fa-bars"></i></a> Lecture - 2: Science & Technology</p>
                        </div>
                        <div class="lecture-right">
                            <a href="javascript:void(0)" class="btn icon-button"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--  -->
            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">

                        <div class="lectures-row px-3 py-2 bg-white" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="lecture-left">
                                <p class="m-0"><a href="javascript:void(0)"
                                        class="btn icon-button icon-button-sm btn-sm rounded-circle"><i
                                            class="fas fa-bars"></i></a> Lecture - 1: Fundamental of IT & Infrastructure
                                </p>
                            </div>
                            <div class="lecture-right">
                                <a href="javascript:void(0)" class="btn icon-button dlt-lecture-btn"><i
                                        class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse border-0 bg-white  collapse"
                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Lecture Title">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Description">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label form-control upload-file"> Upload Video
                                            <i class="fas fa-upload"></i>
                                            <input class="" type="file" id="formFile">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="wrap w-100">
                                            <select class="form-control quizTypeEdit"
                                                aria-label=".form-select-sm example" id="">
                                                <option selected>Quiz Type</option>
                                                <option value="mcqs">M.C.Q's</option>
                                                <option value="true_false">True/ False</option>
                                                <option value="short_answers">Short Answers</option>
                                                <option value="essay">Essay</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-main btn-primary addNewQuizInLecture btn-block w-100">Add
                                            Quiz</button>
                                    </div>
                                </div>

                                <div class="col-md-12 add-new-quiz-types">
                                    <div class="mcqs" style="display:none;">
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-12">
                                                <div class="questions-area shadow-none   p-3 bg-white ">
                                                    <div class="question mb-3 align-items-center">
                                                        <div class="question-left">
                                                            <p class="mb-3"><b>Question 1:</b></p>
                                                        </div>
                                                        <div class="question-right w-100">
                                                            <input type="text" class="w-100"
                                                                placeholder="Enter Your Question Here...">
                                                        </div>
                                                    </div>
                                                    <div class="question mb-0">
                                                        <div class="question-left">
                                                            <p class="mb-3"><b>Choices:</b></p>
                                                        </div>
                                                        <div class="question-right">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3"><input class="form-check-input" type="radio"
                                                                        value="" name="mcqs"> A) <input type="text"
                                                                        placeholder="Enter Choice..."></li>
                                                                <li class="mb-3"><input class="form-check-input" type="radio"
                                                                        value="" name="mcqs"> B) <input type="text"
                                                                        placeholder="Enter Choice..."></li>
                                                                <li class="mb-3"><input class="form-check-input" type="radio"
                                                                        value="" name="mcqs"> C) <input type="text"
                                                                        placeholder="Enter Choice..."></li>
                                                                <li class="mb-3"><input class="form-check-input" type="radio"
                                                                        value="" name="mcqs"> D) <input type="text"
                                                                        placeholder="Enter Choice..."></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row justify-content-between marks-area">
                                                        <div class="col-md-6 mb-3 mb-md-0  mark-left">
                                                            <h3>Question Marks:</h3>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-md-6  mark-right">
                                                            <div class="mark-btn d-flex">
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100 me-2 removeQuizBtn">
                                                                    Remove</button>
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100 me-2">
                                                                    Save</button>
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100">
                                                                    Publish</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trueFalse" style="display:none;">
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-12">
                                                <div class="questions-area shadow-none   p-3 bg-white">
                                                    <div class="question mb-3 align-items-center">
                                                        <div class="question-left">
                                                            <p><b>Question 1:</b></p>
                                                        </div>
                                                        <div class="question-right  w-100">
                                                            <input type="text" class="w-100"
                                                                placeholder="Enter Your Question Here...">
                                                        </div>
                                                    </div>
                                                    <div class="question mb-0">
                                                        <div class="question-left">
                                                            <p><b>Choices:</b></p>
                                                        </div>
                                                        <div class="question-right">
                                                            <ul class="list-unstyled">
                                                                <li><input class="form-check-input" type="radio"
                                                                        value="" name="trueFalse"> A) True</li>
                                                                <li><input class="form-check-input" type="radio"
                                                                        value="" name="trueFalse"> B) False</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row justify-content-between marks-area">
                                                        <div class="col-md-6 mb-3 mb-md-0  mark-left">
                                                            <h3>Question Marks:</h3>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-md-6  mark-right">
                                                            <div class="mark-btn d-flex">
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100 me-2 removeQuizBtn">
                                                                    Remove</button>
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100 me-2">
                                                                    Save</button>
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100">
                                                                    Publish</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shortAnswers" style="display:none;">
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-12">
                                                <div class="questions-area shadow-none   p-3 bg-white">
                                                    <div class="question mb-3 align-items-center">
                                                        <div class="question-left">
                                                            <p><b>Question 1:</b></p>
                                                        </div>
                                                        <div class="question-right w-100">
                                                            <input type="text" class="w-100"
                                                                placeholder="Enter Your Question Here...">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row justify-content-between marks-area">
                                                        <div class="col-md-6 mb-3 mb-md-0  mark-left">
                                                            <h3>Question Marks:</h3>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-md-6  mark-right">
                                                            <div class="mark-btn d-flex">
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100 me-2 removeQuizBtn">
                                                                    Remove</button>
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100 me-2">
                                                                    Save</button>
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100">
                                                                    Publish</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="essay" style="display:none;">
                                        <div class="row align-items-center mb-4">
                                            <div class="col-md-12">
                                                <div class="questions-area shadow-none   p-3 bg-white">
                                                    <div class="question mb-3 align-items-center">
                                                        <div class="question-left">
                                                            <p><b>Question 1:</b></p>
                                                        </div>
                                                        <div class="question-right w-100">
                                                            <input type="text" class="w-100"
                                                                placeholder="Enter Your Question Here...">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row justify-content-between marks-area">
                                                        <div class="col-md-6 mb-3 mb-md-0  mark-left">
                                                            <h3>Question Marks:</h3>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-md-6  mark-right">
                                                            <div class="mark-btn d-flex">
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100 me-2 removeQuizBtn">
                                                                    Remove</button>
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100 me-2">
                                                                    Save</button>
                                                                <button type="submit"
                                                                    class="btn btn-main btn-outline-primary btn-block w-100">
                                                                    Publish</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--  -->
                                <hr class="mt-5">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-main btn-outline-primary me-2"> Save and Update</button>
                                    <a href="saved-quizes.php" class="btn btn-main btn-outline-primary"> View All Quiz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--  -->

        </div>

        <div class="row ">
            <div class="col-12 ">
                <div class="mb-3 d-flex justify-content-end">
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "includes/footer.php" ?>