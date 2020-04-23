
function changeClass() {
    var div = $('#logged');
  if (div.hasClass('loggedIn')) {
    div.removeClass('loggedIn').addClass('loggedOut');
};
//    document.getElementById("logged").className = "loggedIn";
};

$(function () {
    $('#login').on("click", function () {
        changeClass();
    });
});

//function changeClassBack() {
//    var element = document.getElementById("logged");
//    element.classList.add("loggedOut");
//    element.classList.remove("loggedIn");
//}
//; 