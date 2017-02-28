<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>What would you like to eat?</title>
    
    <link href="jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
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
        
        <!-- Intro -->
        <article>
          <h1 class="intro">Are you hungry?</h1>
          <p class="introParagraph">On this page you can see a few recipes, which you can use to make delicious meal by yourself. If you're lazy, you can choose one of restraurant recomended by me ;-)
          <h1 class="intro">Bon Appétit!<br> :-)</h1></p>
        </article>
        
      </div>
    </section>
    
                    <!-- SECTION 2 - SLIDER -->
    
    <section href="#slider" class="section2 hidden">
      <div class="container clearfix">
        <ul class="bxslider">
          <li><img src="images/piecnaszewskiej.jpg"><div class="adress">Piec na szewskiej<br>ul. Szewska 44, Wrocław <iframe src="https://goo.gl/0THfrg" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div></li>
          
          <li><img src="images/burger.jpeg"><div class="adress">Soczewka<br>Rynek 21, Wrocław <iframe src="https://goo.gl/A8z1tX" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div></li>
          
          <li><img src="images/8misek.jpeg"><div class="adress">8misek<br>ul. Włodkowica 27, Wrocław <iframe src="https://goo.gl/QhD050" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div></li>
        </ul>
      </div>
    </section>
    
  </body>
      <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.js"
    integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
    crossorigin="anonymous"></script>
      
      <!-- bxSlider Javascript file -->
    <script src="jquery.bxslider/jquery.bxslider.min.js"></script>

    <!-- my js file -->
    <script src="js/script.js"></script>

</html>