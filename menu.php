<!DOCTYPE html>
<html lang="en">
<?php
    include("database.php"); //INCLUDE CONNECTION
    error_reporting(0); // hide undefine index errors
    session_start(); // temp sessions

    if(isset($_SESSION["user_id"])) {

        require_once("header2.php");
        
     }
     else{  
        require_once("header1.php");
    }


    ?>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="img/paw1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMenu.css">
    <title>Nox's Cafe | Menu</title>
</head>
<body>
    <div id="scrollPath"></div>
    
    <section class="menu-wrapper">
        <div class="menu-blurbx">
            <h1>MENU</h1>
            <div class="menu-container">
                <div class="list-cont">
                    <ul>
                        <li><a href="#Beverages">Beverages</a></li>
                        <li><a href="#Food">Food</a></li>
                        <li><a href="#Desserts">Desserts</a></li>
                    </ul>
                </div>
                <div class="menu-cont">
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
                    <div class="prods-cont">
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
        </div>
    </section>
    </div>

    
</body>
</html>
    <?php
        include("footer.html")
    ?>