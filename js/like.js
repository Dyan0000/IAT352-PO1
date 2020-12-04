$(document).ready(function () {

  function like_dish(){
    // alert("Start to run like_dish() function.");
    var action = 'like_dish';
    var dish_name = $('.modal_title').text();
    var if_like = $('.like_dish').text();
    // alert("dish_name: " + dish_name);
    // alert("if_like: " + if_like);
    $.ajax({
      url: "like_dish.php",
      method: "POST",
      data: {action:action, dish_name:dish_name, if_like:if_like},
      success:function(data){
        $('.like_dish').html(data);
      }
    });
  }

  $('.like_dish').click(function(){
    like_dish();
    // alert("You clicked 'Like'!");
  });

});