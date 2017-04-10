$(function() {
  slideCarousel();
  customfancbox();
  ajax();
  horizontalGallery();
  leftMenuJs();
});
function slideCarousel(){
	$('.carousel').carousel({
	  interval: 4000
	})
}

function customfancbox(){
  $("[data-fancybox]").fancybox({
    fullScreen : {
    	requestOnStart : true // Request fullscreen mode on opening
    },
  });
}

function ajax(){
  var contactForm = $('#ajax-contact-form');

  contactForm.on('submit', function(e){

    e.preventDefault();

    $('.has-error').removeClass('has-error');
    $('.js-show-feedback').removeClass('js-show-feedback');

    var form = $(this);
    var name = form.find('#name').val(),
        email = form.find('#email').val(),
        message = form.find('#message').val(),
        ajaxurl = form.data('url');

    if ( name === '') {
      $('#name').parent('.form-group').addClass('has-error');
    }
    if ( email === '') {
      $('#email').parent('.form-group').addClass('has-error');
    }
    if ( message === '') {
      $('#message').parent('.form-group').addClass('has-error');
    }

    if (name && email && message) {
      form.find('input, button, textarea').attr('disabled', 'disabled');
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
          $('.js-form-error').addClass('js-show-feedback');
          form.find('input, button, textarea').removeAttr('disabled');
        },
        success : function(response){
          $('.js-form-success').addClass('js-show-feedback');
          form.find('input, button, textarea').removeAttr('disabled').val('');
        }
      });/*ENDAJAX*/
    }/*if (name && email && message)*/
  });/*contactForm.on('submit')*/
}

function horizontalGallery(){


  checkSize();
  $(window).resize(checkSize);

}
function checkSize(){
    overallwidth = 0;

    $('.work__gallery__box').each(function() {
        overallwidth = overallwidth + $(this).width() + 100;
    });

    $('.work__gallery').css('width', overallwidth);

    $('.work__gallery__wrap').mousewheel(function(event, delta) {
      this.scrollLeft -= (delta * 1);
      event.preventDefault();
    });

    if ($(".work__gallery__box").css("float") == "none" ){
      $('.work__gallery').css('width', '100%');
      $('.work__gallery__wrap').unbind("mousewheel");
    } else {
      $('.work__gallery').css('width', overallwidth);
    }

}

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
