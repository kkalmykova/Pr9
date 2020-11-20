<?php 
   session_start (); 

  if(!isset($_SESSION ['login'], $_SESSION ['password'])){
	$login = $_SESSION['login'];
    $password = $_SESSION['password'];
	  if($login === 'admin' && $password === '1111') {
       echo "<html> 
       <head>
       <a href='login.php'>Authorization</a>
       </head> 
       </Html> ";
    }
    else{
      echo "Welcome, user!";
    }
  }

   ?> 