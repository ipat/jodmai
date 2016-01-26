$(document).ready(function() {
  // Load mail type when select mail category
  $(".mail-category-choice").click(function(){
    var id = $(this).data("catId");
    $(".mail-types-card").velocity("fadeOut", {duration: 200});
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
    openLoader();
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
      $(".mail-types-card").velocity("fadeIn", {duration: 800});
      $(".mail-types-card").velocity("scroll", {duration: 500});
      bindMailTypeClick();
    });
  });

  // Function to act when select mail type
  var bindMailTypeClick = function(){
    $(".mail-type-choice").click(function(){
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
      openLoader();
      $.ajax({
        url: "../user/addresses",
        dataType: 'json'
      }).done(function(data) {
        $(".all-addresses").empty();
        console.log(data.length);
        if(data.length == 0) {
          $(".all-addresses").append("<big><u>ยังไม่มีที่อยู่ที่เคยใช้</u></big>");
        }
        $.each(data, function(i, address){
          console.log(address);
          // var content = '<div class="choice mail-type-choice hoverable" data-type-id="' + mailType.id +'">' +
          //               '  <div class="choice-img">' +
          //               '    <img src="'+ mailType.picture_url +'" alt="" />' +
          //               '  </div>' +
          //               '  <div class="choice-header">' +
          //               mailType.name +
          //               '  </div>' +
          //               '  <div class="choice-description">' +
          //               mailType.description +
          //               '  <br> ' +
          //               mailType.price + ' บาท' +
          //               '  </div>' +
          //               '</div>';
          // $(".all-mail-types").append(content);
        });
        closeLoader();
        $(".addresses-card").velocity("fadeIn", {duration: 800});
        $(".addresses-card").velocity("scroll", {duration: 500});
      });
    });
  };

  // Call Add new address modal
  $('#add-new-address').click(function(){
    console.log("CLICK");
    $('#new-address-modal').openModal();
  });

  // Utility functions
  var openLoader = function() {
    $(".loader").velocity("fadeIn", {duration: 400});
    // $(".loader").velocity("scroll", {duration: 400});
  }

  var closeLoader = function() {
    $(".loader").velocity("fadeOut", {duration: 400});
  }
});
