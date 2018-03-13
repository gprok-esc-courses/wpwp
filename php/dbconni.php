<?php

   $dbhost = 'localhost';
   $dbuser = 'test';
   $dbpass = 'test';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }

   mysqli_select_db($conn, 'wpwp');

   $result = mysqli_query($conn, 'SELECT * FROM products');


   if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
         echo " - ".$row['description']." - ".$row['price']."<br>";
      }
   }

   mysqli_close($conn);
?>