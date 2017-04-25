$(function() {
  magnific();
  ajax();
});

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
