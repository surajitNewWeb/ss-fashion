<?php include("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Contact-Us Form With A Map Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Contact-Us Form With A Map <small>A Responsive Contact Us Form With Map</small></h1>
</div>

<!-- Contact-Us Form With A Map - START -->


<div class="container">
    <div><h1>Contact Us</h1></div>
    <br />
    <div class="row">
        <div class="col-md-6">
            <div id="googlemap" style="width:100%; height:350px;"></div>
        </div>
        <br />
        <div class="col-md-6">
            <form class="my-form">
                <div class="form-group">
                    <label for="form-name">Name</label>
                    <input type="name" class="form-control" id="form-name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="form-email">Email Address</label>
                    <input type="email" class="form-control" id="form-email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="form-subject">Telephone</label>
                    <input type="text" class="form-control" id="form-subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="form-message">Email your Message</label>
                    <textarea class="form-control" id="form-message" placeholder="Message"></textarea>
                </div>
                <button class="btn btn-default" type="submit">Contact Us</button>                
            </form>
        </div>
    </div>
</div>

<style>
    .my-form {
        color: #305896;
    }
    .my-form .btn-default {
        background-color: #305896;
        color: #fff;
        border-radius: 0;
    }
    .my-form .btn-default:hover {
        background-color: #4498C6;
        color: #fff;
    }
    .my-form .form-control {
        border-radius: 0;
    }
</style>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script>
</div>
<?php include("footer.php");  ?>
</body>
</html>