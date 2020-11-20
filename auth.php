<?php
  session_start ();

   //if(!isset($_SESSION ['login'], $_SESSION ['password'])){
	$login = 'admin';
    $password = '1111';
	  if($_POST ['login'] === $login && $_POST ['password'] === $password) {
	  $_SESSION['auth'] = true;
   header ("Location: restricted.php");
	  }
   
   else echo "Wrong input, try again <br> "; 
  
   ?> 
