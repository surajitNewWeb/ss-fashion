<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'product_name');
            if(in_array($_POST['product_name'],$myitems))
            {
                echo"<script>
                alert('items already added');
                window.location.href='index.php';
                </script>";
            }
            else
            {
              $count=count($_SESSION['cart']);
              $_SESSION['cart'][$count]=array('product_name'=>$_POST['product_name'],'product_price'=>$_POST['product_price'],'product_details'=>$_POST['product_details'],'Quantity'=>1);
              echo"<script>
              alert('items  added');
              window.location.href='index.php';
              </script>";
            }
        }
        else
        {
          $_SESSION['cart'][0]=array('product_name'=>$_POST['product_name'],'product_price'=>$_POST['product_price'],'product_details'=>$_POST['product_details'],'Quantity'=>1);
          echo"<script>
          alert('items  added');
          window.location.href='index.php';
          </script>";
        }
    }

    if(isset($_POST['remove_item']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
        if($value['product_name']==$_POST['product_name'])
        {
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          echo"<script>
          alert('Product  removed');
          window.location.href='mycart.php';
          </script>";
        }
        
      }
    }

}
?>
