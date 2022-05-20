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


$(".debitOrCredit").click(function () {
  $(this).find("span").toggleClass("bg-warning bg-success");
});

$('.dlt-lecture-btn').click(function(){
  $(this).parentsUntil('.accordion').remove();
})

$('.selectTwo').select2();


$('.pricing-table').find('th:not(.empty)').click(function(){
  $('.pricing-table').find('th:not(.empty)').removeClass('active');
  $(this).addClass('active');
  
  var dta ='.'+ $(this).data('target');
  $('.pricing-table').find('.data').removeClass('text-danger');
  $(dta).addClass('text-danger')
});

$('#header-search-area').find('i').click(function(){
  $('#header-search-area').find('.search-area').toggleClass('active');
})

$('body').click(function(){
  $('#header-search-area').find('.search-area').removeClass('active');
})

$('#header-search-area > *').click(function(e){
  e.stopPropagation();
})

