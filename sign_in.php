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
            #footer{
                 position: fixed;
                width:100%;
                
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
             



    
        
       

   
        <?php
        
        if(isset($_POST['submit']))
        {
            $dbc= mysqli_connect('localhost', 'root', '', 'review') or die('could not connect to the database');
            
             $first_name = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
  $last_name = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
   $user_id = mysqli_real_escape_string($dbc, trim($_POST['user_id']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password']));
    $password2= mysqli_real_escape_string($dbc, trim($_POST['password1']));
    if(($password1==$password2)&&(!empty($first_name)&&!empty($last_name)&&!empty($user_id)))
    {
        
        $query="select * from user_info where user_id='$user_id'";
        $data= mysqli_query($dbc, $query);
        if(mysqli_num_rows($data)==0)
        {
            
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
        // echo "Success";
      }else{
         print_r($errors); die();
      }
   }
   
   $imagename='http://localhost/online_review/images/'.$file_name;
            $query="INSERT INTO user_info values('$first_name','$last_name','$user_id','$password1','$imagename')";
            mysqli_query($dbc, $query);
             $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/front_page_meena.php';
     header('Location:'.$home_url);
            
        }
        else
        {
            echo'<center><p>PLEASE CHOOSE A DIFFERENT USER ID</p></center>';
        }
 
        
    }
    else
    {
        echo '<center><p>PLEASE FILL THE FORM CORRECTLY</p></center>';
    }
    mysqli_close($dbc);
    }
?>
        <div class="container">
            <div class="jumbotron">
    <center>
        <form method="POST" action="#" enctype="multipart/form-data" id="hello">
            
           
        <!--<form method="POST" action="#" class="hello">-->
            
            <div class="form-group">
  <label for="first_name">FIRST NAME:</label>
  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first_name" style="width:150px">
</div>
           
         <div class="form-group">
  <label for="last_name">LAST NAME:</label>
  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" style="width:150px">
</div>
         <div class="form-group">
  <label for="user_id">USER ID:</label>
  <input type="text" class="form-control" name="user_id" id="user_id" placeholder="user id" style="width:150px">
</div>
            <div class="form-group">
  <label for="password">PASSWORD:</label>
  <input type="password" class="form-control" name="password" id="password" placeholder="password" style="width:150px">
</div>
            <div class="form-group">
  <label for="password1">RE-ENTER PASSWORD :</label>
  <input type="password" class="form-control" name="password1" id="password1" placeholder="password" style="width:150px">
</div>
       
            <div class="form-group">
                <label for="image">IMAGE:</label>
            <input type="file" name="image" id="image" placeholder="image">
            </div>
            
           
       <!-- <label for="user_id">USER ID</label>
            <input type="text" name="user_id" id="user_id" placeholder="user id">
            <label for="password">PASSWORD</label>
            <input type="text" name="password" id="password" placeholder="password">-->
            <input type="submit" value="submit" name="submit" id="submit" class="btn btn-primary navbar-btn">
        </form>
   
          <!--  <label for="first_name">
                FIRST NAME
                
                
            </label>
            <input type="text" name="first_name" id="first_name" placeholder="first_name">
            <label for="last_name">LAST NAME</label>
            <input type="text" name="last_name" id="last_name" placeholder="last name">
            <label for="user_id">USER ID</label>
            <input type="text" name="user_id" id="user_id" placeholder="user id">
            <label for="password">PASSWORD</label>
            <input type="text" name="password" id="password" placeholder="password">
            <label for="password1">RE-ENTER PASSWORD</label>
            <input type="text" name="password1" id="password1" placeholder="password1">
            <label for="image">IMAGE</label>
            <input type="file" name="image" id="image" placeholder="image">
            <input type="submit" value="submit" name="submit">
            
        </form>
          -->
        
    </center>
        </div>
        </div>
        
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

