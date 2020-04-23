function animatePicture() {
  var image = $('.gameImage');
  if (image.hasClass('animate')) {
    image.removeClass('animate').addClass('animateRevert');
  } else if (image.hasClass('animateRevert')) {
    image.removeClass('animateRevert').addClass('animate');
  } else {
    image.addClass('animate');
  }
};

$(function() {
  $('.gameImage').on("click", function() {
    animatePicture();
  });
});