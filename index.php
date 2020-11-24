<?php
//echo 'This is PHP!</p>';

if(isset($_GET["FirstName"])){//show info
 // echo $_GET["FirstName"];
  
  echo '<pre>';
  var_dump($_GET);
  echo '</pre>';
  
}else{//show form
  echo'
  <form action ="">
  <p>First Name: <input type="text" name="FirstName" /><br /></p>
  <p>Last Name: <input type="text" name="LastName" /><br /></p>
  <input type="submit" />
 </form> 
  ';
}





?>

