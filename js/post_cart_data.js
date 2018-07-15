$(document).ready(function()) {
  $(".add_to_cart").click(function(){
    var id_good=$(this).attr('data-id');
  $.post("/cart/addAjax"+id, {}, function(data))
  });
});
