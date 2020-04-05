<?php
   $bien_1 = "name";
   $bien_2 = '$bien_1 sẽ không được in!';
   print($bien_2);
   print "<br>";
   
   $bien_2 = "$bien_1 sẽ được in!";
   print($bien_2);
?>