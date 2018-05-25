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
        </style>
    </head>
    <body>
    <center>
        <ul>
            <li>
                <form action="product_display.php" method="POST" enctype="multipart/form-data">
                    <label for="product_name">
                        ENTER PRODUCT
                    </label>
                    <input type="text" name="product_name" id="product_name">
                    <input type="submit" value="submit" name="submit">
                </form>
            </li>
             <li> <a href="<?php 
            if(!isset($_COOKIE['user_id']))
            {
                echo'sign_in.php';
            }
            
            ?>"><?php
            
            if(!isset($_COOKIE['user_id']))
            {
                echo'SIGN IN';
            }
            ?></a>
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
        
        ?>"><?php  
        if(isset($_COOKIE['user_id']))
        {
            echo'LOG OUT';
            
        }
        else
        {
            echo'LOG IN';
        }
        
        ?></a></li>
            
           
           
            <li>
                <a href="search.php">
                    SEARCH PRODUCT
                </a>
            </li>
            <li>
                <a href="about.php">
                    ABOUT
                </a>
            </li>
             <li>
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
                </a>
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
    </body>
</html>