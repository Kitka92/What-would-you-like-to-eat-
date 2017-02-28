<?php
 
 $adres_ip_serwera_mysql_z_baza_danych = '127.0.0.1';
 $nazwa_bazy_danych = 'przepisy';
 $login_bazy_danych = 'root';
 $haslo_bazy_danych = '';
   
            if ( !mysql_connect($adres_ip_serwera_mysql_z_baza_danych,
              $login_bazy_danych,$haslo_bazy_danych) ) {
                echo 'Nie moge polaczyc sie z baza danych';
                 exit (0);
             }

             if ( !mysql_select_db($nazwa_bazy_danych) ) {
                echo 'Blad otwarcia bazy danych';
                 exit (0);
             }
 
$offset_wynik = mysql_query( " SELECT FLOOR(RAND() * COUNT(*)) AS `offset` FROM `recipes` ");
$offset_row = mysql_fetch_object( $offset_wynik ); 
$offset = $offset_row->offset;
$wynik = mysql_query( " SELECT * FROM `recipes` LIMIT $offset, 1 " );
          
           while ( $row = mysql_fetch_row($wynik) ) {
              echo $row[2];
           }
 
           if ( !mysql_close() ) {
              echo 'Nie moge zakonczyc polaczenia z baza danych';
              exit (0);
           }

?>