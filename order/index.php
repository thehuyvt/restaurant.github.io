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
    <!-- Start Order section -->
    <div id ="order-food"  class="order-section">
        <div class="container-order">
            <h2 class="order-content">Fill this form to confirm your order.</h2>
            <div class="container-order-selected">
                <img src="./img/menu-pizza.jpg" alt="pizza" class="order-img">
                <form action="" class="food-title">
                    <h3 class="title-order-food">Food Title</h3>
                    <h3 class="price">$2.3</h3>
                    <label for="quantity">Quantity</label><br>
                    <input type="number" value="1" min="0" id="quantity">
                </form>
                <div class="clear"></div>
            </div>
            <div class="container-delivery-details">
                <label for="full-name">Full Name</label><br>
                <input type="text" id="full-name" class="fwidth-input" value="" name="full-name" placeholder="E.g. Pham The Huy"><br>
                <label for="phone-number">Phone Number</label><br>
                <input type="tel" id="phone-number" class="fwidth-input" value="" name="phone-number" maxlength="10" placeholder="E.g. 0968249xxx"><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" class="fwidth-input"value=""  name="email" placeholder="E.g. abchuydeptrai@gmail.com"><br>
                <label for="address">Address</label><br>
                <input type="text" id="address" class="fwidth-input" value="" name="address"  placeholder="E.g. Street, City, Country"><br>
                <input type="submit" value="Confirm Order" id="confirm-order">
            </div>
        </div>
    </div>
    <!-- End Order section -->
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