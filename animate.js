function animateButton() {
  var button = $('.gameImage');
  if (button.hasClass('animate')) {
    button.removeClass('animate').addClass('animateRevert');
  } else if (button.hasClass('animateRevert')) {
    button.removeClass('animateRevert').addClass('animate');
  } else {
    button.addClass('animate');
  }
};

$(function() {
  $('.gameImage').on("click", function() {
    animateButton();
  });
});