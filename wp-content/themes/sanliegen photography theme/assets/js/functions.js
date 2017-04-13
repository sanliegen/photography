$(function() {
  magnific();
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
