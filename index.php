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
  <p>Favorite Color:</p>
  <p><input type="radio" name="FavoriteColor" value="red" /><br /> Red </p>
  <p><input type="radio" name="FavoriteColor" value="blue" /><br /> Blue </p>
  <p><input type="radio" name="FavoriteColor" value="yellow" /><br /> Yellow </p>
  
  <p>Sundae Toppings:</p>
  <p><input type="radio" name="Toppings[]" value="oreos" /><br /> Oreos </p>
  <p><input type="radio" name="Toppings[]" value="whipped cream" /><br /> Whipped Cream </p>
  <p><input type="radio" name="Toppings[]" value="crushed nuts" /><br /> Crushed Nuts </p>
  <input type="submit" />
 </form> 
  ';
}





?>

