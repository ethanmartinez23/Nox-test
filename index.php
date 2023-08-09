<!DOCTYPE html>
<html lang="en">
<?php
    include("database.php"); //INCLUDE CONNECTION
    error_reporting(0); // hide undefine index errors
    session_start(); // temp sessions

    if(isset($_SESSION["user_id"])){
        require_once("header2.php");
    }else{  
        require_once("header1.php");
    }

    ?>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="img/paw1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nox's Cafe</title>
</head>
<body>
    <div id="scrollPath"></div>
    <!-- Header -->
   
    <!-- Header end -->

    <!-- Image Slider -->
    <div class="img-box">
        <div class="img-slider">
            <div class="slide active">
                <img src="img/img1.png" alt="">
            </div>
            <div class="slide">
                <img src="img/img2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/img3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/img4.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/img5.jpg" alt="">
            </div>
            <div class="navigation">
                <div class="btn active"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
            </div>
        </div>
    </div>

    <!--  end Image Slider -->
    
    <div class="menu-tag">
            <h2 class="tag">MENU</h2>
    </div>

    <div class="prods-container">
        <h1><span>BEVERAGES</span></h1>
        <div class="prods-slide">
            <div class="prods-cont">
                <div class="drink">
                    <img src="img/drinks.png" alt="">
                    <h3>Blends of coffee beans imported from the mountains of Malawi</h3>
                    <a href="#Order" class="btnOrder">Order</a>
                </div>
                <div class="drink">
                    <img src="img/drinks.png" alt="">
                    <h3>Blends of coffee beans imported from the mountains of Malawi</h3>
                    <a href="#Order" class="btnOrder">Order</a>
                </div>
                <div class="drink">
                    <img src="img/drinks.png" alt="">
                    <h3>Blends of coffee beans imported from the mountains of Malawi</h3>
                    <a href="#Order" class="btnOrder">Order</a>
                </div>
                <div class="drink">
                    <img src="img/drinks.png" alt="">
                    <h3>Blends of coffee beans imported from the mountains of Malawi</h3>
                    <a href="#Order" class="btnOrder">Order</a>
                </div>
                <div class="drink">
                    <img src="img/drinks.png" alt="">
                    <h3>Blends of coffee beans imported from the mountains of Malawi</h3>
                    <a href="#Order" class="btnOrder">Order</a>
                </div>
            </div>
        </div>
        
        <h1><span>FOODS</span></h1>
        <div class="drinks-slide">
            <div class="drinks-cont">
                <div class="food">
                    <img src="img/foods.png" alt="">
                    <h3>Diverse cuisine right at your table by the best chefs</h3>
                    <a href="#Order" class="btnOrder">Order</a>
                </div>
                <div class="food">
                    <img src="img/foods.png" alt="">
                    <h3>Diverse cuisine right at your table by the best chefs</h3>
                    <a href="#Order" class="btnOrder">Order</a>
                </div>
                <div class="food">
                    <img src="img/foods.png" alt="">
                    <h3>Diverse cuisine right at your table by the best chefs</h3>
                    <a href="#Order" class="btnOrder">Order</a>
                </div>
                <div class="food">
                    <img src="img/foods.png" alt="">
                    <h3>Diverse cuisine right at your table by the best chefs</h3>
                    <a href="#Order" class="btnOrder">Order</a>
                </div>
                <div class="food">
                    <img src="img/foods.png" alt="">
                    <h3>Diverse cuisine right at your table by the best chefs</h3>
                    <a href="#Order" class="btnOrder">Order</a>
                </div>
            </div>
        </div>
        
    </div>

    <div class="about">
        <div class="menu-tag">
            <h2 class="tag">ABOUT</h2>
        </div>
        
        <div class="client-info">
            <div class="client-pic">
                <img src="img/clientpic.png" alt="">
            </div>
            <div class="client-desc">
                <h2>
                    Nox's Cafe was founded in September of year 2018 and is owned by a 26 year old business owner
                    Gamaliel Rod Deluz. 
                    The business plan for the café was supposed to be a dog café as 
                    the owner love pets, but 2 months before the construction of the 
                    business location they changed the plan to a bistro-style and billiards café. 
                </h2>
            </div>
        </div>

        <div class="client-info">
            <div class="client-desc">
                <h2>
                    Given Nox's Cafe's style and theme, it makes the place a perfect
                    instagramable location worth visiting. With all the handpainted 
                    artwork murals that covers the walls of the cafe, taking a picture
                    or two would be quite irresistable. 
                </h2>
            </div>
            <div class="client-pic1">
                <img src="img/noxabout1.jpg" alt="">
            </div>
        </div>
        
        <div class="client-info">
            <div class="client-pic2">
                <img src="img/noxabout2.png" alt="">
            </div>
            <div class="client-desc">
                <h2>
                    The Cafe is located at B3 L9 Heno De Pravia Street, Sarreal Village, Imus, 4103 Cavite,
                    and welcomes its customers in their business hours from 12 Am to 12 Pm from Monday to Saturday, and 12 Am to 9Pm
                    for Sundays. 
                    The cafe isn't just a cafe, but also offers actvities such as billiards and board games
                    to its customers which makes it all the more worth your while!
                </h2>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
        include("footer.html")
    ?>
    <!-- end Footer -->
<script src="funcs/main.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</body>
</html>