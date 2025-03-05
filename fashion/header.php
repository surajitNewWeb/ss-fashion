<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASHION STORE BY SURAJIT</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- START CODE FOR FONT AWSAME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  CLOSE CODE FOR FONT AWSAME CDN -->
    <!--   CODE FOR LINKING CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <!-- header section -->
    <header class="header">
        <a href="#" class="logo"><i class="fa-solid fa-vest-patches"></i>SS-FASHION</a>
        <nav class="navbar">
        <a href="index.php">Home</a> 
        <a href="about.php">About</a> 
        <a href="contact.php">Contact-us</a>
        <ul class="nav nav-pills">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="category.php">Category</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="men.php">Men</a></li>
                  <li><a class="dropdown-item" href="women.php">Women</a></li>
                  <li><a class="dropdown-item" href="kids.php">Kids</a></li>
                  <li><a class="dropdown-item" href="cosmetic.php">Cosmetic</a></li>
                </ul>
              </li>
          </ul>
          <a href="order.php">Order</a>
        </nav>

        <div class="icons">
            <div class="fa fa-bars" id="menu-btn"></div>
            <div class="fa fa-search" id="search-btn"></div>
            <a href="mycart.php">
                <div class="fa fa-shopping-cart" id="cart-btn"></div>
            </a>
            <div class="fa fa-user" id="login-btn"></div>
            <div class="fa fa-heart" id="heart-btn"></div>
        </div>

        <form class="search-form" action="" method="get">
            <input type="search" name="s" id="search-box" placeholder="search here .......">
            <label for="search-box" class="fa fa-search"></label>
        </form>

        <div class="log">
            <form action="#" class="login-form"></form>
            <h3>Login Now</h3>
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            <p>Forgot your Password <a href="#">Click here</a></p>
            <p>Do not have any account <a href="#">Create now</a></p>
            <input type="submit" name="save" value="login-now" class="btn">

        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js">
    </script>
</body>

</html>