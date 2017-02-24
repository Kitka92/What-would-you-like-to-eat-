$(document).ready(function(){
  
  /* EVENTS ON INDEX.html */
  
  var button = $('button');
  var radio = $('input'["name=inOrOut"]);
  var form = $('form');
  var article = $('article');
  var section2 = $('.section2');
  
  button.on('click', function(e) {
      e.preventDefault();
      e.stopImmediatePropagation();
      var selectedRadioVal = ($('input[type=radio]:checked').val());

      if (selectedRadioVal == 2) {
        section2.removeClass('hidden');
        $('.bxslider').bxSlider();
      } else {
          $.ajax({
            url: "recipes.php"
            })
            .done(function( data ) {
             article.html(data);
          });
      }
  });
  
  /*
  $(document).ready(function(){
        $('.bxslider').bxSlider();
        }); */
  
});
  
  
  
