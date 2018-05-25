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
            
            ?>" <?php 
            if(!isset($_COOKIE['user_id']))
            {
                echo'class="btn btn-primary navbar-btn "';
                        
                        
            }?>><b><?php
            
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
                ?>" 
                
                <?php
                if(isset($_COOKIE['user_id']))
                {
                    
                echo 'class="btn btn-primary navbar-btn"';
                }
                        ?>><?php
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
                    echo'<a href="add_product.php" class="btn btn-primary navbar-btn">ADD PRODUCT</a>';
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
                    echo'<a href="delete_product.php" class="btn btn-primary navbar-btn">DELETE PRODUCT</a>';
                }
                }
                ?>
            </li>
           
           
</ul>
    </center>
   </ul></div>
             
      
         </nav>
             
     <!--jumbotron-->
     <div class="container">
            <div class="jumbotron text-center">
                <h2><b><h1>REVIEWS OF PRODUCT</h1></b></h2>
                <p><marquee><b style="color:blueviolet">This website is used to review the different products. And you can also read or write your own review. Come to review world</b></marquee></p>
           
              
            </div>
          </div>

           


          <!--images-->

          <div class="container">

            <div id="mycarousel" class="carousel slide" data-ride="carousel" >
             
              <ol class="carousel-indicators">
                <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                
                <li data-target="#mycarousel" data-slide-to="1" ></li>
                
                <li data-target="#mycarousel" data-slide-to="2" ></li>

              </ol>
              <div class="carousel-inner">
              <div class="item active">
                  <img src="images\6.jpg" style="width:100% ; height:500px  " class="img-rounded">
              <div class="carousel-theme">
                
              </div>
            </div>
            <div class="item ">
              <img src="images\8.jpg" style="width:100% ; height:500px " class="img-rounded">
              <div class="carousel-theme">

                
              </div>
            </div>
            <div class="item ">
              <img src="images\9.jpg" style="width:100% ; height:500px " class="img-rounded">
              <div class="carousel-theme">
                
              </div>
            </div>
              </div>
              <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span>
              </a>
             <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
             </a>
            </div> </div>

          <div>
              
          </div>
            <!--columns for objects-->
          <div>
              <div class="container">
                  <div class="jumbotron">
            <div class="row">
              <div class="col-sm-4">
                <a href="#" class="thumbnail">
                  <img src="images\3.jpg" alt="phones" style="width:100% " class="img-circle">
                </a>
                <h3>Phone</h3>
                <p>There are different phone and heavy phone right now. What to buy? read the review from the user and experts.</p>
              </div>
              <div class="col-sm-4">
                <a href="#" class="thubnail">
                <img src="images\5.jpg" alt="clothing" style="width:100% " class="img-circle">
              </a>
              <h3>Clothes</h3>
                <p>Variety of clothes? looking for buy but can decide. Come and see the review on the clothes from different clothes production.</p> </div>

              <div class="col-sm-4">
                <a href="#" class="thumbnail">
                  <img src="images\6.jpg" alt="books" style="width:100% " class="img-circle">
                </a><h3>Books</h3><p>Read and write your thought and give your review on different book.From science fiction to romantic books.</p></div>
            </div>
                  </div>
          </div>
          </div>
         


           

    <!--FOOTER-->
          <div class="navbar navbar-inverse navbar-default-bottom">
            <div class="container-fluid">
              <div class="navbar-text pull-left"><p>ALL RIGHT RESERVED &copy 2019</p>
                  </div>
                  <div class="container-fluid">
                    <div class="navbar-text pull-right">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                   <a href="#"><i class="fab fa-facebook-square"></i></a>
                   <a href="#"><i class="fab fa-google-plus-g"></i></a>
                </div>
              </div>
            </div>
          </div>


          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>