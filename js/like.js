$(document).ready(function () {

  function like_dish(){
    var dish_name = $('#dish_name').val();
    var action = 'like_dish';
    $.ajax({
      method: "POST",
      url: "like_dish.php",
      data: {action:action, dish_name:dish_name},
      success:function(data){
        $('#like_dish').text("Already Liked");
      }
    });
  }

  $('#item_like').click(function(){
    like_dish();
    alert("You clicked 'Like'!");
  });

});