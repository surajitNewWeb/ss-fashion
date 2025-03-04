<?php include("header.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .table {
            font-size: 15px;
        }

        .box {
            width: 80%;
        }

        .foot {
            height: 10px;
            width: 100%;
            background-color: yellow;
        }
        .abc{
            height: 50px;
        }
        .abcd{
            height: 200px;
        }
    </style>

</head>

<body>
    <div class="img">
        <img style="width: 100%;height: 400px;" src="image/banner-bg.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class=" abc col-md-12 text-center border rounded bg-light">
                <h1>MY CART</h1>
            </div>
            <div class="col-md-9">
                <table class="table">
                    <thead class="text-center border rounded bg-light">
                        <tr>
                            <th>Serial No.</th>
                            <th>Product name</th>
                            <th>Product price </th>
                            <th>Product details</th>
                            <th>Quantity</th>
                            <th>Product Remove </th>
                        </tr>
                    </thead>
                    <tbody class="text-center  border rounded bg-light">
                        <?php
                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $total=$total+$value['product_price'];
                            echo"
                            <tr>
                            <td>1</td>
                            <td>$value[product_name]</td>
                            <td>$value[product_price]</td>
                            <td>$value[product_details]</td>
                            <td><input class='text-center border rounded bg-light ' type='number' value='$value[Quantity]'min='1'max='10'></td>
                            <td> 
                            <form action='managecart.php' method='post'>
                                <button class='btn btn-sml btn-outline-danger' name='remove_item'>REMOVE</button>
                                <input type='hidden' name='product_name' value='$value[product_name]'>
                            </form>
                            </td>
                            </tr>
                            ";
                        }
                        }

                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                <div class="abcd border bg-light rounded p-4">
                    <h3>Total:</h3>
                    <h5 class="text-center">
                        <?php echo $total ?>
                    </h5>
                    <br>
                    <form action="">
                        <input type="radio" id="html" name="fav_language" value="HTML">
                        <label for="html">Cash on delivery</label><br>
                        <button class=" box btn btn-primary text-center">Make Purches</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div class="foot"></div>
    
</body>

</html>
<?php include("footer.php");  ?>