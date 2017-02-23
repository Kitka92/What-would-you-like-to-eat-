<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>What would you like to eat?</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Lobster" rel="stylesheet">
    
  </head>
  
  
  <body>
    <?php
  ////////////////////////////////////////////////////////////
 //Przykład kodu wyświetlającego dane z bazy mysql (tabeli newsletter z
 //osobami zapisanymi na listę dystrybucyjną)
 //Wymagania
 //  1. Zalozona baza mysql na serwerze
 //  2. Tabela newsletter w bazie mysql z polami imie, nazwisko, mail
 ////////////////////////////////////////////////////////////
 
 ////////////////////////////////////////////////////////////
 //Definicje zmiennych
 
 //adres ip serwera mysql który zawiera bazę danych i tabele z osobami 
 //zapisanymi na listę dystrybucyjna newslettera
 $adres_ip_serwera_mysql_z_baza_danych = '127.0.0.1';
 
 //nazwa bazy danych z tabelą newsletter zawierającą osoby zapisane na 
 //listę dystrybucyjna newslettera
 $nazwa_bazy_danych = 'przepisy';
 
 //nazwa uzytkownika bazy danych $nazwa_bazy_danych
 $login_bazy_danych = 'root';
 
 //haslo uzytkownika bazy danych $nazwa_bazy_danych
 $haslo_bazy_danych = '';
 
 ////////////////////////////////////////////////////////////
 //Kod programu
 
 //Ustanawiamy połączenie z serwerem mysql
 if ( !mysql_connect($adres_ip_serwera_mysql_z_baza_danych,
 
              $login_bazy_danych,$haslo_bazy_danych) ) {
    echo 'Nie moge polaczyc sie z baza danych';
 	 exit (0);
 }
 //Wybieramy baze danych na serwerze mysql ktora zawiera tabele
 //newsletter gdzie sa dane osob z listy dystrybucyjnej
 if ( !mysql_select_db($nazwa_bazy_danych) ) {
    echo 'Blad otwarcia bazy danych';
 	 exit (0);
 }
 
 //Definiujemy zapytanie pobierające wszystkie wiersze z wszystkimi
 //polami z tabeli newsletter
 $zapytanie = "SELECT * FROM `recipes`";
 //wykonujemy zdefiniowane zapytanie na bazie mysql
 $wynik = mysql_query($zapytanie);
 
 //Wyświetlamy w tabeli html dane pobrane 
 //z tabeli newsletter bazy mysql
 //Najpierw definiujemy nagłówek tabeli html
 echo "<p>";
 echo "<table boder=\"1\"><tr>";
 echo "<td bgcolor=\"ffff00\"><strong>Przepis</strong></td>";
 echo "</tr>";
 //Teraz wyświetlamy kolejne wiersze z tabeli newsletter
 //Pola tabeli newsletter pobieramy odwołując się do ich 
 //numerów jak poniżej:
 //   0 (UID)
 //   1 (Imie)
 //   2 (Nazwisko)
 //   3 (Mail)
 while ( $row = mysql_fetch_row($wynik) ) {
    echo "</tr>";
    echo "<td bgcolor=\"ffff00\">" . $row[2] . "</td>";
    echo "</tr>";
 }
 echo "</table>";
 
 
 //Zamykamy połączenie z bazą danych
 if ( !mysql_close() ) {
    echo 'Nie moge zakonczyc polaczenia z baza danych';
    exit (0);
 }
 
 ?>
    
                    <!-- HEADER -->
    <header>
      <div class="container clearfix">
        <img src="images/logo2.png">
        <h1><a href="index.html">What would you like to eat?</a></h1>
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
            <input type="radio" name="inOrOut">I want to cook myself
          </label>

          <!-- Eat out -->
          <label class="inOrOut">
            <input type="radio" name="inOrOut">I want to eat out
          </label>

          <button>Eat!</button>
        </form>
        
        <!-- RECIPES -->
        <!-- French Toasts -->
        <article>
          <div class="image"><img src="images/food-1179398_960_720.png"></div>
          <h1>French Toasts</h1>
          <div class="wraper">
            <div class="ingredients">
              <h2>Ingredients:</h2>
              <ul>
                <li>Bread</li>
                <li>Chease</li>
                <li>Onion</li>
                <li>Ham</li>
                <li>Ketchup or mustard</li>
              </ul>
            </div>
            <div class="recipe">
              <h2>Recipe:</h2>
              <p>If you don't know how to make a toast - feel free to contact me :)</p>
            </div>
        </article>
        
      </div>
    </section>
    
    <section class="section2 hidden">
      <div class="container clearfix">
        <div class="slider">
          <ul>
            <li><img src="images/piecnaszewskiej.jpg"><div>tekst</div></li>
            <li><img src="images/burger.jpeg"></li>
            <li><img src="images/8misek.jpeg"></li>
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
    <script src="https://www.gstatic.com/firebasejs/3.6.9/firebase-app.js"></script> 
    <script src="https://www.gstatic.com/firebasejs/3.6.9/firebase-database.js"></script>
   
    <script src="js/script.js"></script>
</html>