<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>What would you like to eat?</title>
    <!-- bxSlider CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Lobster" rel="stylesheet">
    
  </head>
  
  
  <body>
    
    
    <!-- HEADER -->
    <header>
      <div class="container clearfix">
        <img src="images/logo2.png">
        <h1><a href="index.php">What would you like to eat?</a></h1>
        <nav>
          <ul>
            <li><a href="aboutme.html">about me</a></li>
            <li><a href="projects.html">projects</a></li>
            <li><a href="contact.html">contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    
                    <!-- SECTION -->
    <section>
      <div class="container section1">
        <!-- form -->
        <form>
          <legend>Select your meal...</legend>

        <!-- kind of meal -->
          <select name="meal">
            <option value="1">Meal</option>
            <option value="2">Breakfast</option>
            <option value="3">Dinner</option>
            <option value="4">Supper</option>
          </select>

          <!-- Cook at home -->
          <label class="inOrOut">
            <input type="radio" name="inOrOut" value="1">I want to cook myself
          </label>

          <!-- Eat out -->
          <label class="inOrOut">
            <input type="radio" name="inOrOut" value="2">I want to eat out
          </label>

          <button>Eat!</button>
        </form>
        
        <article>
          
        </article>
        
      </div>
    </section>
    
    <!-- SECTION 2 -->
    <section class="section2 hidden">
      <div class="container clearfix">
        <div class="slider">
          <ul class="bxslider">
            <li><img src="images/piecnaszewskiej.jpg"><div>Piec na szewskiej<br>ul.Szewska 44/46 Wrocław</div></li>
            <li><img src="images/burger.jpeg"><div>Piec na szewskiej<br>ul.Szewska 44/46 Wrocław</div></li>
            <li><img src="images/8misek.jpeg"><div>Piec na szewskiej<br>ul.Szewska 44/46 Wrocław</div></li>
          </ul
        </div>
      </div>
      <button id="nextPic">prev</button>
      <button id="prevPic">next</button>
    </section>
    
  </body>
     <script src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>

      
   
    <script src="js/script.js"></script>
</html>