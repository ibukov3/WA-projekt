<?php
$con = mysqli_connect("localhost","root","","register");
if (mysqli_connect_errno())
  {
  echo "Neuspješno povezivanje na MySQL bazu: " . mysqli_connect_error();
  }
?>