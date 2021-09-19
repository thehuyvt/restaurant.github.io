<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurent Website</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <!-- Navbar section Starts here -->
    <section class="navbar">
            <div class="logo">
                <a href="/home">
                    <img class="logo-img" src="./img/logo.png" alt="Logo restaurent">
                </a>
            </div>
            <div class="menu text-right">
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/categories">Categories</a></li>
                    <li><a href="#">Foods</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="clear"></div>
    </section>
    <!-- Navbar section Ends here -->
    </div>

    <!-- Food search Starts here -->
    <section class="food-search">
        <div class="container">
            <form action="">
                <input type="search" id="search-text" name = "search-text" placeholder="Search for Food...">
                <input type="submit" id="search-btn" class="style-btn" value="Search">
            </form>
        </div>
    </section>
    <!-- Food search Ends here -->

    <!-- Food menu Starts here -->
    <section class="food-menu">
        <div class="container">
            <h1 class="text-center style-content">Food Menu</h1>
            <div class="list-food-menu">
                <div class="row-food-menu">
                    <div class="description-food">
                        <img src="./img/menu-pizza.jpg" alt="pizza" class="description-food-img">
                        <div class="body-description-food">
                            <h3 class="description-food-name">Food Title</h3>
                            <h3 class="price">$2.3</h3>
                            <p>Made with italian Sauce, Chicken, and organice vegeatbles.</p>
                            <a href="/order"><button class="style-btn order-btn">Order Now</button></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="description-food">
                        <img src="./img/menu-burger.jpg" alt="pizza" class="description-food-img">
                        <div class="body-description-food">
                            <h3 class="description-food-name">Smoky Burger</h3>
                            <h3 class="price">$2.3</h3>
                            <p>Made with italian Sauce, Chicken, and organice vegeatbles.</p>
                            <a href="/order"><button class="style-btn order-btn">Order Now</button></a>                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row-food-menu">
                    <div class="description-food">
                        <img src="./img/menu-momo.jpg" alt="pizza" class="description-food-img">
                        <div class="body-description-food">
                            <h3 class="description-food-name">Chicken Momo</h3>
                            <h3 class="price">$2.3</h3>
                            <p>Made with italian Sauce, Chicken, and organice vegeatbles.</p>
                            <a href="/order"><button class="style-btn order-btn">Order Now</button></a>                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="description-food">
                        <img src="./img/menu-pizza.jpg" alt="pizza" class="description-food-img">
                        <div class="body-description-food">
                            <h3 class="description-food-name">Food Title</h3>
                            <h3 class="price">$2.3</h3>
                            <p>Made with italian Sauce, Chicken, and organice vegeatbles.</p>
                            <a href="/order"><button class="style-btn order-btn">Order Now</button></a>                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row-food-menu">
                    <div class="description-food">
                        <img src="./img/menu-burger.jpg" alt="pizza" class="description-food-img">
                        <div class="body-description-food">
                            <h3 class="description-food-name">Nice Burger</h3>
                            <h3 class="price">$2.3</h3>
                            <p>Made with italian Sauce, Chicken, and organice vegeatbles.</p>
                            <a href="/order"><button class="style-btn order-btn">Order Now</button></a>                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="description-food">
                        <img src="./img/menu-momo.jpg" alt="pizza" class="description-food-img">
                        <div class="body-description-food">
                            <h3 class="description-food-name">Nice Momo</h3>
                            <h3 class="price">$2.3</h3>
                            <p>Made with italian Sauce, Chicken, and organice vegeatbles.</p>
                            <a href="/order"><button class="style-btn order-btn">Order Now</button></a>                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            <p class="footer-menu">See All Foods</p>
            </div>
        </div>
    </section>
    <!-- Food menu Ends here -->

    <!-- Social Starts here -->
    <section id="contact" class="social">
        <div class="container">
            <div class="social-icon">
                <a href="#"><i class="facebook-icon fab fa-facebook"></i></a>
                <a href="#"><i class="instagram-icon fab fa-instagram-square"></i></a>
                <a href="#"><i class="twitter-icon fab fa-twitter"></i></a>
            </div>
        </div>
    </section>
    <!-- Social Ends here -->

    <!-- Footer Starts here -->
    <section class="footer">
        <div class="container">
            <p>All rights reseverd. Designed By <a href="#">TheHuy.TLU</a></p>
        </div>
    </section>
    <!-- Footer Ends here -->
</html>