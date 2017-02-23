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
      } else {
          $.ajax({
            url: "recipes.php"
            })
            .done(function( data ) {
             article.html(data);
          });
      }
  });
    
  
  /* SLIDER */
  /*
  var list = $('.section2').find("ul");
  var listElements = list.find("li");
  var index = 0;
  var onePicWidth = 640;
  listElements.parent().width(onePicWidth * 3);
  var next = $('.section2').find('#nextPic');
  var prev = $('.section2').find('#prevPic');
  
  next.on("click", function() { 
        if (index < 2 && index >= 0) {
          listElements.parent().animate({
            left: "+=-640px"
          },1000)
          index++;
        } else if (index > 2) {
          nextBtn.off();
        }
      console.log(index);
    });
    
    prev.on("click", function() { 
        if (index < 3 && index > 0) {
          listElements.parent().animate({
            left: "+=640px"
          },1000)
          index--;
        } else if (index = 0) {
          prevBtn.off();
        }
      console.log(index);
    });
  */
  
  $(document).ready(function(){
  $('.bxslider').bxSlider();
});
  
});
  
  
  
