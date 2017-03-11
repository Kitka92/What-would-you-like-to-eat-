<?php
 
// Theese data are available only for me, so I removed them ;-)
 $database_ip = '';
 $database_name = '';
 $database_login = '';
 $database_pass = '';
   
            if ( !mysql_connect($database_ip,
              $database_login,$database_pass) ) {
                echo "I can't connect to database";
                 exit (0);
             }

             if ( !mysql_select_db($database_name) ) {
                echo 'Database opening error';
                 exit (0);
             }
 
$offset_result = mysql_query( " SELECT FLOOR(RAND() * COUNT(*)) AS `offset` FROM `recipes` ");
$offset_row = mysql_fetch_object( $offset_result ); 
$offset = $offset_row->offset;
$result = mysql_query( " SELECT * FROM `recipes` LIMIT $offset, 1 " );
          
           while ( $row = mysql_fetch_row($result) ) {
              echo $row[2];
           }
 
           if ( !mysql_close() ) {
              echo "I can't end database connection";
              exit (0);
           }

?>