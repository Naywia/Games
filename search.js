$(function(){
    
  $("#search").on("keyup", function() {
      
    var value = $(this).val().toLowerCase();
    
    $("#gameGallery *").filter(function() {
        
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      
    });
  });
});