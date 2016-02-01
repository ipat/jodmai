$(document).ready(function() {
  // Load mail type when select mail category
  $(".mail-category-choice").click(function(){
    var id = $(this).data("catId");
    $(".mail-types-card").velocity("fadeOut", {duration: 200});
    $(".addresses-card").velocity("fadeOut", {duration: 200});
    $(".submit-panel").velocity("fadeOut", {duration: 500});
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
      loadReceiverAddress();
    });
  };

  var loadReceiverAddress = function(){
    $(".submit-panel").velocity("fadeOut", {duration: 500});
    $.ajax({
      url: "../user/address",
      dataType: 'json'
    }).done(function(data) {
      $(".all-receiver-addresses").empty();
      console.log(data.length);
      if(data.length == 0) {
        $(".all-receiver-addresses").append("<big><u>ยังไม่มีที่อยู่ที่เคยใช้</u></big>");
      }
      $.each(data, function(i, address){
        console.log(address);
        var content = '<div class="receiver-address address hoverable" data-address-id="' + address.id +'">' +
                      '  <div class="address-header">' +
                      address.name +
                      '  </div>' +
                      '  <div class="address-address">' +
                      address.address_line_1 + "<br>" +
                      address.address_line_2 + "<br>" +
                      address.address_line_3 + "<br>" +
                      '  </div> ' +
                      '  <div class="address-postcode">' +
                      address.postcode + "<br>" +
                      '  </div>'
                      '  <br> ' +
                      '</div>';
        $(".all-receiver-addresses").append(content);
      });
      closeLoader();
      $(".receiver-addresses-card").velocity("fadeIn", {duration: 800});
      $(".receiver-addresses-card").velocity("scroll", {duration: 500});
      bindReceiverAddressClick();
    });
  }

  // Function to act when select mail type
  var bindReceiverAddressClick = function(){
    $(".receiver-address").click(function(){
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
      openLoader();
      loadSenderAddress();
    });
  };

  var loadSenderAddress = function(){
    $(".submit-panel").velocity("fadeOut", {duration: 500});
    $.ajax({
      url: "../user/sender-address",
      dataType: 'json'
    }).done(function(data) {
      $(".all-sender-addresses").empty();
      console.log(data.length);
      var content = '<div class="sender-address address hoverable" data-address-id="0">' +
                    '  <div class="address-header">' +
                    ' <big>ไม่ต้องการระบุที่อยู่ผู้ส่ง</big> ' +
                    '  </div>' +
                    '  <br> ' +
                    '</div>';

      $(".all-sender-addresses").append(content);
      //
      // if(data.length == 0) {
      //   $(".all-sender-addresses").append("<big><u>ยังไม่มีที่อยู่ที่เคยใช้</u></big>");
      // }
      $.each(data, function(i, address){
        // console.log(address);
        var content = '<div class="sender-address address hoverable" data-address-id="' + address.id +'">' +
                      '  <div class="address-header">' +
                      address.name +
                      '  </div>' +
                      '  <div class="address-address">' +
                      address.address_line_1 + "<br>" +
                      address.address_line_2 + "<br>" +
                      address.address_line_3 + "<br>" +
                      '  </div> ' +
                      '  <div class="address-postcode">' +
                      address.postcode + "<br>" +
                      '  </div>'
                      '  <br> ' +
                      '</div>';
        $(".all-sender-addresses").append(content);
      });
      closeLoader();
      $(".sender-addresses-card").velocity("fadeIn", {duration: 800});
      $(".sender-addresses-card").velocity("scroll", {duration: 500});
      bindSenderAddressClick();
    });
  }

  // Function to act when select mail type
  var bindSenderAddressClick = function(){
    $(".sender-address").click(function(){
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
      openLoader();
      showSubmitBtn();
    });
  };


  var showSubmitBtn = function(){
    var typeId = $(".mail-type-choice.active").data('typeId');
    var recAddId = $(".receiver-address.active").data('addressId');
    var sendAddId = $(".sender-address.active").data('addressId');
    $("#next-page").attr("href", "create/" + typeId + "/" + recAddId + "/" + sendAddId);
    $(".submit-panel").velocity("fadeIn", {duration: 800});
    $(".submit-panel").velocity("scroll", {duration: 500});
    closeLoader();
  }

  // Call Add new address modal
  $('#add-new-receiver-address').click(function(){
    $('#new-receiver-address-modal').openModal();
  });

  // Call Add new address modal
  $('#add-new-sender-address').click(function(){
    $('#new-sender-address-modal').openModal();
  });

  // Add new address to DB
  $('#submit-new-receiver-address').click(function(){
    var submitAddress = $('#new-receiver-address-form').serialize();
    openLoader();
    $.ajax({
      url: "../user/address/create",
      type: 'post',
      data: submitAddress
    }).done(function(data) {
      loadReceiverAddress();
    });
  });

  // Add new address to DB
  $('#submit-new-sender-address').click(function(){
    var submitAddress = $('#new-sender-address-form').serialize();
    openLoader();
    $.ajax({
      url: "../user/sender-address/create",
      type: 'post',
      data: submitAddress
    }).done(function(data) {
      loadSenderAddress();
    });
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
