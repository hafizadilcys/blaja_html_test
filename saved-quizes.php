<?php include "includes/header.php" ?>
<div class="eveluation-page">
    <div class="container">
        <div class="page-title py-3">
            <h2 class='mb-3'>All Quizes</h2>

        </div>
        <div class="questions-area shadow-none  mb-3 p-3 bg-white ">
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
        <div class="questions-area shadow-none mb-3 p-3 bg-white">
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
        <div class=" d-flex justify-content-end align-items-center mt-4">
            <button type="submit" class="btn btn-main btn-outline-primary me-2">Remove All</button>
            <button type="submit" class="btn btn-main btn-primary ">Publish All</button>

        </div>
    </div>
</div>
<?php include "includes/footer.php" ?>