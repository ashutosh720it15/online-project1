<?php
if(isset($_POST['submit']))
{
     $dbc= mysqli_connect('localhost', 'root','', 'review');
     $product_name = mysqli_real_escape_string($dbc, trim($_POST['product_name']));
     $cookie_name='p_name';
     
     setcookie('product_name',$product_name, (time()+60*60*24*30));
     //echo $_COOKIE['product_name'];
     
      $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/product_display.php';
     header('Location:'.$home_url);
}
?>