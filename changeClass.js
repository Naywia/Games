
function changeClass() {
    var div = $('#logged');
    if (div.hasClass('loggedOut')) {
        div.removeClass('loggedOut').addClass('loggedIn');
    };
//    document.getElementById("logged").className = "loggedIn";
};

$(function () {
    $('#login').click(function () {
        changeClass();
    });
});

//function changeClassBack() {
//    var element = document.getElementById("logged");
//    element.classList.add("loggedOut");
//    element.classList.remove("loggedIn");
//}
//; 