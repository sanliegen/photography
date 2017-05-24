$(function() {
  // horizontalGallery();
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


$(window).on("load resize",function() {
  imgWidth = 0;
  $('.js-image-width').each(function(){
    imgWidth = imgWidth + 100 + parseInt($(this).width());
  });
  boxWidth = 0;
  $('.horizontal__gallery__box').each(function() {
      boxWidth = boxWidth + $(this).width() + 100;
  });
  console.log(imgWidth);
  console.log(boxWidth);

  var overallwidth = imgWidth + boxWidth;

  console.log(overallwidth);

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
});
