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
        
        <article>
          <h1 class="intro">Are you hungry?</h1>
          <p class="introParagraph">On this page you can see a few recipes, which you can use to make delicious meal by yourself. If you're lazy, you can choose one of restraurant recomended by me ;-)
          <h1 class="intro">Bon Appétit!<br> :-)</h1></p>
        </article>
        
      </div>
    </section>
    
                    <!-- SECTION 2 - SLIDER -->
    
    <section class="section2 hidden">
      <div class="container clearfix">
        <ul class="bxslider">
          <li><img src="images/piecnaszewskiej.jpg"><div class="adress">Piec na szewskiej<br>ul. Szewska 44, Wrocław <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2504.727467776498!2d17.03382791548661!3d51.113488279572266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fe9df256eab6d%3A0x943d6bb90e38e936!2sPiec+Na+Szewskiej!5e0!3m2!1spl!2spl!4v1487847716761" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div></li>
          
          <li><img src="images/burger.jpeg"><div class="adress">Soczewka<br>Rynek 21, Wrocław <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10019.256929059837!2d17.025611421118157!3d51.11188754755021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd37c1a0eb1edd2c7!2sSoczewka!5e0!3m2!1spl!2spl!4v1487848482784" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div></li>
          
          <li><img src="images/8misek.jpeg"><div class="adress">8misek<br>ul. Włodkowica 27, Wrocław <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10019.787831846643!2d17.0231326!3d51.1094388!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc175fb5cc37ccef7!2sOSIEM+MISEK!5e0!3m2!1spl!2spl!4v1487848664782" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div></li>
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