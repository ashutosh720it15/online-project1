<?php
setcookie('user_id','', (time()-3600));
 $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/front_page_meena.php';
     header('Location:'.$home_url);
?>