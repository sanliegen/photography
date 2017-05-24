$(function() {
  magnific();
  ajax();
  leftMenuJs();
});

function leftMenuJs(){
  var menuToggle = $('#js-mobile-menu').unbind();
  $('#js-navigation-menu').removeClass("show");

  menuToggle.on('click', function(e) {
    e.preventDefault();
    $('#js-navigation-menu').slideToggle(function(){
      if($('#js-navigation-menu').is(':hidden')) {
        $('#js-navigation-menu').removeAttr('style');
      }
    });
  });
}

function magnific(){
  $('#work__gallery__js').each(function() {
    var $container = $(this);
    var $imageLinks = $container.find('.item');

    var items = [];
    $imageLinks.each(function() {
      var $item = $(this);
      var type = 'image';
      if ($item.hasClass('magnific-youtube')) {
        type = 'iframe';
      }
      var magItem = {
        src: $item.attr('href'),
        type: type
      };
      magItem.title = $item.data('title');
      items.push(magItem);
      });

    $imageLinks.magnificPopup({
      mainClass: 'mfp-fade',
      items: items,
      gallery:{
          enabled:true,
          tPrev: $(this).data('prev-text'),
          tNext: $(this).data('next-text')
      },
      type: 'image',
      callbacks: {
        beforeOpen: function() {
          var index = $imageLinks.index(this.st.el);
          if (-1 !== index) {
            this.goTo(index);
          }
        }
      }
    });
  });

  $('#js-portfoli-layout-gallery').each(function() {
    var $container = $(this);
    var $imageLinks = $container.find('.item');

    var items = [];
    $imageLinks.each(function() {
      var $item = $(this);
      var type = 'image';
      if ($item.hasClass('magnific-youtube')) {
        type = 'iframe';
      }
      var magItem = {
        src: $item.attr('href'),
        type: type
      };
      magItem.title = $item.data('title');
      items.push(magItem);
      });

    $imageLinks.magnificPopup({
      mainClass: 'mfp-fade',
      items: items,
      gallery:{
          enabled:true,
          tPrev: $(this).data('prev-text'),
          tNext: $(this).data('next-text')
      },
      type: 'image',
      callbacks: {
        beforeOpen: function() {
          var index = $imageLinks.index(this.st.el);
          if (-1 !== index) {
            this.goTo(index);
          }
        }
      }
    });
  });
}
function ajax(){
  var contactForm = $('#ajax-contact-form');

  contactForm.on('submit', function(e){

    e.preventDefault();

    var form = $(this);
    var name = form.find('#name').val(),
        email = form.find('#email').val(),
        message = form.find('#message').val(),
        ajaxurl = form.data('url');

    if ( name === '') {
      $('#small__name').addClass('has-error');
    }
    if ( email === '') {
      $('#small__mail').addClass('has-error');
    }
    if ( message === '') {
      $('#small__message').addClass('has-error');
    }


    if (name && email && message) {
      $.ajax({
        url: ajaxurl,
        type: 'POST',
        data: {
          name: name,
          email: email,
          message: message,
          action: 'ajax_save_user_contact_form'
        },
        error : function(response){
          $('.feedback__error').addClass('has-error-feedback');
        },
        success : function(response){
          $('.feedback__success').addClass('has-send');
        }
      });/*ENDAJAX*/
    }/*if (name && email && message)*/
  });/*contactForm.on('submit')*/
}

$(window).on("load resize",function(e) {
  var more = document.getElementById("js-centered-more");

  var link = document.getElementById("dropdown-link");

  if (link) {link.setAttribute('href', "javascript:void(0)");} else {}

  var menuToggle = $("#js-centered-navigation-mobile-menu").unbind();
  $("#js-centered-navigation-menu").removeClass("show");

  menuToggle.on("click", function(e) {
    e.preventDefault();
    $("#js-centered-navigation-menu").slideToggle(function(){
      if($("#js-centered-navigation-menu").is(":hidden")) {
        $("#js-centered-navigation-menu").removeAttr("style");
      }
    });
  });

  var dropdownToogle = $("#dropdown-link").unbind();
  $(".submenu").removeClass("active");

  dropdownToogle.on("click", function(e) {
    e.preventDefault();
    $(".submenu").slideToggle(function(){
      if($(".submenu").is(":hidden")) {
        $(".submenu").removeAttr("style");
      }
    });
  });

});
