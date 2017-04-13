$(function() {
  horizontalGallery();
});
function horizontalGallery(){
  checkSize();
  $(window).resize(checkSize);
}

function checkSize(){
    overallwidth = 0;

    $('.horizontal__gallery__box').each(function() {
        overallwidth = overallwidth + $(this).width() + 100;
    });

    $('.horizontal__gallery').css('width', overallwidth);

    $('.horizontal__gallery__wrap').mousewheel(function(event, delta) {
      this.scrollLeft -= (delta * 1);
      event.preventDefault();
    });

    if ($(".horizontal__gallery__box").css("float") == "none" ){
      $('.horizontal__gallery').css('width', '100%');
      $('.horizontal__gallery__wrap').unbind("mousewheel");
    } else {
      $('.horizontal__gallery').css('width', overallwidth);
    }

}
