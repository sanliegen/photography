$(function() {
  ajax();
  horizontalGallery();
  magnific();
});

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

function magnific(){
  $('.work__gallery__wrap').each(function() {
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
