<!DOCTYPE html>
<html>
    <head>
        <title>
            FRONT PAGE
        </title>
        <style>
            form{
                display:inline;
            }
            li{
                display: inline;
                padding: 10px 40px;
            }
            .navbar-inverse {
    background-color: #F8F8F8;
    border-color: blueviolet !important;
    color:yellowgreen;
            }
             .hello{
                margin-bottom: 400px;
            }
            
            .navbar navbar-inverse navbar-default-bottom{
                margin-top: -500px;
            }
            #footer{
                position: fixed;
                width: 100%;
                bottom: 0;
                
            }
        </style>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

    </head>
    <body>
    	 <nav class="navbar navbar-inverse">
             
      	<button type="button" class="navbar-toggle"
        data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
       
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
    <center>
        <ul>
             <li>
                <a href="http://localhost/online_review/front_page_meena.php" class="btn btn-primary navbar-btn" >
                    <b>HOME</b>
                </a>
            </li>
            <li>
                <form action="set_product_cookie.php" method="POST" enctype="multipart/form-data">
                    <label for="product_name">
                        <b>ENTER PRODUCT</b>
                    </label>
                    <input type="text" name="product_name" id="product_name">
                    <b>
                    <input type="submit" value="SEARCH" name="submit" class="btn btn-primary navbar-btn">
                    </b>
                </form>
            </li>
             <li><b> <a href="<?php 
            if(!isset($_COOKIE['user_id']))
            {
                echo'sign_in.php';
            }
            
            ?>" class="btn btn-primary navbar-btn"><b><?php
            
            if(!isset($_COOKIE['user_id']))
            {
                echo'SIGN UP';
            }
            ?>
                         </b></a>
                         </li>
            <li>
        <a href="<?php 
        
        if(isset($_COOKIE['user_id']))
        {
            echo"log_out.php";
        }
        else
        {
            echo"login.php";
        }
        
        ?>
            " class="btn btn-primary navbar-btn"><b><?php  
        if(isset($_COOKIE['user_id']))
        {
            echo'<b>LOG OUT</b>';
            
        }
        else
        {
            echo'LOG IN';
        }
        
        ?></b></a></li>
            
           
           
            <li><b>
                <a href="search.php" class="btn btn-primary navbar-btn">
                  <b>  SEARCH PRODUCT</b>
                </a>
            </li>

            <li>
                 <a href="about.php" class="btn btn-primary navbar-btn">
                   <b> ABOUT</b>
                 </a>
                
            </li>
             <li><b>
                <a href="<?php
                if(isset($_COOKIE['user_id']))
                {
                    echo'profile.php';
                }
                ?>"><?php
                if(isset($_COOKIE['user_id']))
                {
                    echo'YOUR PROFILE';
                }
                ?>
                </a></b>
            </li>
            <li>
                <?php
                if(isset($_COOKIE['user_id']))
                {
                if($_COOKIE['user_id']=='admin')
                {
                    echo'<a href="add_product.php">ADD PRODUCT</a>';
                }
                }
                ?>
            </li>
            
            <li>
                <?php
                if(isset($_COOKIE['user_id']))
                {
                if($_COOKIE['user_id']=='admin')
                {
                    echo'<a href="delete_product.php">DELETE PRODUCT</a>';
                }
                
                }
                ?>
            </li>
           
           
</ul>
    </center>
   </ul></div>
             
      
         </nav>
    </body>
</html>