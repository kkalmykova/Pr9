<?php
    session_start (); 

   if (!isset ($_GET ['go'])){ 
      echo "<form method='POST' name='authorization' action='auth.php'>
         Login:&nbsp&nbsp <input type='text' name='login'><br>
         Password: <input type='password' name='password'><br>
         <input type='submit' value='Submit'>
     </form>";
   } 
   else { 
      $_SESSION ['Login']=$_GET ['login']; 
      $_SESSION ['Password']=$_GET ['password']; 
      //include "auth.php";
   } 
   ?>