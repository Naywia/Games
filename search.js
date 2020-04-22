$(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#gallery *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});