<?php
 session_start();
 ?>
 <html> <body bgcolor = red>
 <?php
  $_SESSION["color"]="red";
  echo"Session variable are set";
  ?>
  <a href = "Session2.php">Click for next page" </a>
  </body> </html>