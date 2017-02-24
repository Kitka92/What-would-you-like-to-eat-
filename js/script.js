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
// option - I want to eat out
      if (selectedRadioVal == 2) {
        section2.removeClass('hidden');
        
        if (section2.length) {
          event.preventDefault();
          $("html, body").animate({
            scrollTop:section2.offset().top
          }, 2000);
        }
        
        $('.bxslider').bxSlider();
 // option - I want to cook myself       
      } else {
          $.ajax({
            url: "recipes.php"
            })
            .done(function( data ) {
             article.html(data);
          });
      }
  });
  
  
  // On About me
  
  var about = $('.about');
  var projects = $('.projects');
  var contact = $('.contact');
  about.hide();
  projects.hide();
  contact.hide();
  
  about.delay(300).show(700);
  projects.delay(300).fadeIn(700);
  contact.delay(300).slideDown(700);
  
});
  
  
  
