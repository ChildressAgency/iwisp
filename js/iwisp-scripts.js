jQuery(document).ready(function($){

  $('.show-comment-form').on('click', function(e){
    e.preventDefault();
    $('.leave-comment').slideToggle();
  });
  
});