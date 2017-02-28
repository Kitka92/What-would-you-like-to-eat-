$(document).ready(function(){
  
  /* EVENTS ON INDEX.php */
  
  var button = $('button');
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
  
  /* EVENTS ON ABOUT ME, PROJECTS, CONTACT.html */
    
  var about = $('.about');
  var projects = $('.projects');
  var contact = $('.contact');
  about.hide();
  projects.hide();
  contact.hide();
  
  about.delay(1000).show(700);
  projects.delay(1000).fadeIn(700);
  contact.delay(1000).slideDown(700);
  
});
  
  
  
