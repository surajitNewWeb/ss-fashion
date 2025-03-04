<?php
include("inc/db.php");
?>
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
  <?php include("header.php"); ?>

  <!-- banner section -->
  <section class="home" id="Home">
    <div class="content">
      <h3>Sweate in Style and <span> Fashion</span> Branded</h3>
      <p>Established in the year 2024, Fashion Sight Opticals</p>
      <a href="category.php" class="btn">Shop-now</a>
    </div>
  </section>
  <!-- end of banner section -->


  <!-- our Features section -->
  <section class="features" id="features">
    <h1 class="heading">Our <span>Features</span></h1>

    <div class="box-container">
      <div class="box">
        <img src="image/fashion.jpg">
        <h3>Easy Fashin</h3>
        <p>Online Shopping Site for Fashion & Lifestyle in India.!</p>
        <a href="#" class="btn">Reade more</a>
      </div>
      <div class="box">
        <img src="image/free-delivery.jpg">
        <h3>Free Delivery</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, recusandae!</p>
        <a href="#" class="btn">Reade more</a>
      </div>
      <div class="box">
        <img src="image/easy pay.jpg">
        <h3>Easy payment</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, recusandae!</p>
        <a href="#" class="btn">Reade more</a>
      </div>

    </div>
  </section>
  <!--end of  our Features section -->

  <!-- our product section -->

  <section class="products" id="products">
    <h1 class="heading">Our <span>Products</span></h1>

    <div class="col-md-12">
      <div class="row">
        <?php
                     $sel="SELECT * FROM surajit ";
                     $rs=$con->query($sel);
                     while($row=$rs->fetch_assoc()){
                     
                  ?>

        <div class="col-md-3">
          <form action="managecart.php" method="post">
            <div class="card" style="">
              <img style="height: 300px;" class="myimage" src="../admin/img/<?php echo $row['product_img']; ?>">
              <div class="card-body">
                <h1>
                  <?php echo $row['product_name']; ?>
                </h1>
                <div class="price">
                  Rs:-
                  <?php echo $row['product_price']; ?>
                </div>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half"></i>
                </div>
                <h4>
                  <?php echo $row['product_details']; ?>
                </h4>
                <button type="submit" class="btn btn-primary" name="add_to_cart">Add To Cart<i
                    class="fa-solid fa-cart-plus"></i></button>
                <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
                <input type="hidden" name="product_details" value="<?php echo $row['product_details']; ?>">
              </div>
            </div>
          </form>
        </div>
        <?php  } ?>
      </div>
    </div>
  </section>


  <!-- our product section -->

  <section class="categories" id="Categories">
    <h1 class="heading">product<span>categories</span></h1>
    <div class="col-md-12">
      <div class="box-container">
        <div class="box">
          <img style="width: 100%;height: 300px;padding: 0 1rem ;" src="image/men-01.jpg">
          <h3>Men</h3>
          <p>upto 45%off</p>
          <a href="men.php" class="btn">shop now</a>
        </div>

        <div class="box">
          <img style="width: 100%;height: 300px;padding:0 1rem ;" src="image/women-01.jpg">
          <h3>Women</h3>
          <p>upto 45%off</p>
          <a href="women.php" class="btn">shop now</a>
        </div>

        <div class="box">
          <img style="width: 100%; height: 300px;padding:0 1rem ;" src="image/kid-01.jpg">
          <h3>Kid's</h3>
          <p>upto 45%off</p>
          <a href="kid.php" class="btn">shop now</a>
        </div>


        <div class="box">
          <img style="width: 100%; height: 300px;padding:0 1rem ;" src="image/cosmetics.jpeg">
          <h3>Cosmetics & jweelery</h3>
          <p>upto 45%off</p>
          <a href="cosmetic.php" class="btn">shop now</a>
        </div>

      </div>
    </div>
  </section>
  <!-- footer -->

  <?php include("footer.php");  ?>
  <!-- end footer -->


</body>

</html>