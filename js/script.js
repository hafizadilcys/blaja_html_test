$(".mbl-menu").click(function () {
  $(".dashboard-aside").addClass("active");
  $(".dashboard-aside-close").show();
});

$(".dashboard-aside-close").click(function () {
  $(".dashboard-aside").removeClass("active");
  $(".dashboard-aside-close").hide();
});

$(window).resize(function () {
  if ($(window).width() > 1200) {
    $(".dashboard-aside").removeClass("active");
    $(".dashboard-aside-close").hide();
  }
});

$("#addLectureBtn").click(function () {
  $("#addLectureDiv").fadeIn();
});

$("#removeLectureBtn").click(function () {
  $("#addLectureDiv").fadeOut();
});

$(".quizTypeBtn").click(function () {
  if ($(".quizType").val() == "mcqs") {
    $("#mcqs").fadeIn();
    $("#trueFalse").hide();
    $("#shortAnswers").hide();
    $("#essay").hide();
  } else if ($(".quizType").val() == "true_false") {
    $("#mcqs").hide();
    $("#trueFalse").fadeIn();
    $("#shortAnswers").hide();
    $("#essay").hide();
  } else if ($(".quizType").val() == "short_answers") {
    $("#mcqs").hide();
    $("#trueFalse").hide();
    $("#shortAnswers").fadeIn();
    $("#essay").hide();
  } else if ($(".quizType").val() == "essay") {
    $("#mcqs").hide();
    $("#trueFalse").hide();
    $("#shortAnswers").hide();
    $("#essay").fadeIn();
  } else {
    $("#mcqs").hide();
    $("#trueFalse").hide();
    $("#shortAnswers").hide();
    $("#essay").hide();
  }
});
$('.removeQuizBtn').click(function(){
  $("#mcqs").hide();
  $("#trueFalse").hide();
  $("#shortAnswers").hide();
  $("#essay").hide(); 
})
$(".addNewQuizInLecture").click(function () {
  if ($(".quizTypeEdit").val() == "mcqs") {
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".mcqs").fadeIn();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".trueFalse").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".shortAnswers").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".essay").hide();
  } else if ($(".quizTypeEdit").val() == "true_false") {
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".mcqs").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".trueFalse").fadeIn();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".shortAnswers").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".essay").hide();
  } else if ($(".quizTypeEdit").val() == "short_answers") {
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".mcqs").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".trueFalse").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".shortAnswers").fadeIn();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".essay").hide();
  } else if ($(".quizTypeEdit").val() == "essay") {
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".mcqs").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".trueFalse").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".shortAnswers").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".essay").fadeIn();
  } else {
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".mcqs").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".trueFalse").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".shortAnswers").hide();
    $(this).parentsUntil('.accordion-collapse').find('.add-new-quiz-types').find(".essay").hide();
  }
});


$(".debitOrCredit").click(function () {
  $(this).find("span").toggleClass("bg-warning bg-success");
});

$('.dlt-lecture-btn').click(function(){
  $(this).parentsUntil('.accordion').remove();
})

$('.selectTwo').select2();
