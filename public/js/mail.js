$(document).ready(function() {
  $(".choice").click(function(){
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
    openLoader();
  });

  $(".mail-category-choice").click(function(){
    var id = $(this).data("catId");
    $(".mail-types-card").velocity("fadeOut", {duration: 200});
    $.ajax({
      url: "mailtypes/" + id,
      dataType: 'json'
    }).done(function(data) {
      $(".all-mail-types").empty();
      $.each(data, function(i, mailType){
        var content = '<div class="choice mail-type-choice hoverable" data-type-id="' + mailType.id +'">' +
                      '  <div class="choice-img">' +
                      '    <img src="'+ mailType.picture_url +'" alt="" />' +
                      '  </div>' +
                      '  <div class="choice-header">' +
                      mailType.name +
                      '  </div>' +
                      '  <div class="choice-description">' +
                      mailType.description +
                      '  <br> ' +
                      mailType.price + ' บาท' +
                      '  </div>' +
                      '</div>';
        $(".all-mail-types").append(content);
      });
      closeLoader();
      $(".mail-types-card").velocity("fadeIn", {duration: 1000});
    });
  });

  var openLoader = function() {
    $(".loader").velocity("fadeIn", {duration: 500});
    $(".loader").velocity("scroll", {duration: 500});
  }

  var closeLoader = function() {
    $(".loader").velocity("fadeOut", {duration: 500});
  }
});
