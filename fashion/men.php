<?php
include("inc/db.php");
?>
<?php include("header.php"); ?>
<link rel="stylesheet" href="css/style.css">
  <div class="img">
    <img style="width: 100%;height: 400px;" src="image/banner-bg.png" alt="">
</div>
<section class="products" id="products">
    <h1 class="heading">Mens <span>Products</span></h1>

    <div class="col-md-12">
      <div class="row">
        <?php
                     $sel="SELECT * FROM men ";
                     $rs=$con->query($sel);
                     while($row=$rs->fetch_assoc()){
                     
                  ?>

        <div class="col-md-3">
          <form action="managecart.php" method="post">
            <div class="card" >
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
<?php include("footer.php");  ?>