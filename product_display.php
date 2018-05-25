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



    
        
   
    <center>
        <div class="container">
            <div class="jumbotron">
                <h1><b>PRODUCT DISPLAY</b></h1>
        <?php
        
        $dbc= mysqli_connect('localhost', 'root','', 'review');
     // $product_name = mysqli_real_escape_string($dbc, trim($_POST['product_name']));
        $product_name= $_COOKIE['product_name'];
      $query="SELECT * FROM product where product_name='$product_name'";
      $data= mysqli_query($dbc, $query);
      $row= mysqli_fetch_array($data);
      if($row==0)
      {
          echo"<script>alert('no such product is present in the database')</script>";
         
           $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/front_page_meena.php';
     header('Location:'.$home_url);     
          
      echo"<script>alert('no such product is present in the database')</script>";
      }
      else
      {
      echo'<center><h4><b>PRODUCT NAME</b></h4></center>';
      echo'<center><h5>'.$row['product_name'].'</h5></center>';
      echo'<center><h4><b>PRODUCT TYPE</b></h4></center>';
      echo'<center><h5>'.$row['product_type'].'</h5></center>';
       echo'<center><h4><b>PRODUCT PRICE</b></h4></center>';
      echo'<center><h5>'.$row['product_price'].'</h5></center>';
       echo'<center><h4><b>PRODUCT IMAGE</b></h4></center>';
      echo'<center><img src="'.$row['product_picture'].'" height="350" width="400" class="img-rounded"></center>';
               
               
      
       $product_name=$_COOKIE['product_name'];
                $dbc= mysqli_connect('localhost', 'root','', 'review');
                $query="SELECT * FROM comment where product_name='$product_name'";
                    $data= mysqli_query($dbc, $query);
$rows= mysqli_fetch_all($data);

$count=0;
$temp=0;
foreach($rows as $row){
    
    $count=$count+$row[5];
    $temp=$temp+1;
    
}    
if($temp==0)
{
    $count=0;
}
else
{
$count=$count/$temp;
}
 echo "<h5>".$count." &#x2605</h5>";
      }
      
        ?>
        <center>
            <h1><b>USER'S REVIEWS</b></h1>
            <form method="POST" action="#" enctype="multipart/form-data">
                <label for="comment">COMMENT</label>
                <textarea class="form-control" rows="5" id="comment" style="width: 200px" name="comment"></textarea>
                <label for="star">
                    RATE THE PRODUCT
                </label><br />
                <input type="text" name="star" id="star" style="width:200px" placeholder="review out of FIVE"> 
                <br />
                <input type="submit" value="submit" name="submit" class="btn btn-primary navbar-btn">
            </form>
        </center>
                <?php
                
                if(isset($_POST['submit'])&&isset($_POST['comment'])&&isset($_POST['star']))
                {
                    if(!isset($_COOKIE['user_id']))
                    {
                        echo"<script>window.alert('please login first')</script>";
                        
                    }
                    else
                    { 
                       $dbc= mysqli_connect('localhost', 'root','', 'review');
                        $comment = mysqli_real_escape_string($dbc, trim($_POST['comment']));
                        $star = mysqli_real_escape_string($dbc, trim($_POST['star']));
                        $product_name=$_COOKIE['product_name'];
                        $user_id=$_COOKIE['user_id'];
                        $date= date("Y-m-d H:i:s");
                        
                        
                         $query="INSERT INTO comment(`user_id`,`product_name`,`comment`,`date_time`,`star`) values('$user_id','$product_name','$comment','$date','$star')";
            mysqli_query($dbc, $query);
            echo"<script>alert('your review has been submitted ')</script>";
                        
                    }
                }
                ?>
                <h1>
                    <b> USERS REVIEW</b>
                </h1>
                <?php
                $product_name=$_COOKIE['product_name'];
                $dbc= mysqli_connect('localhost', 'root','', 'review');
                $query="SELECT * FROM comment where product_name='$product_name'";
                    $data= mysqli_query($dbc, $query);
$rows= mysqli_fetch_all($data);

foreach($rows as $row){
    //echo'<h4>USER ID:</h>';
        echo "<h5><b>".$row[1]."</b></h5>";
      //  echo"<h4>COMMENT:</h4>";
        echo "<h5>".$row[2]."</h5>";
        echo "<h5>".$row[3]."</h5>";
        echo "<h5>".$row[4]."</h5>";
        //echo"<h4>star:</h4>";
        echo "<h5>".$row[5]." &#x2605</h5>";
       // echo"<p> &#x2605</p>";
    
}
                ?>
                
                
            </div>
        </div>
    </center>
    <div id="footer" class="navbar navbar-inverse navbar-default-bottom">
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
    </body>
</html>