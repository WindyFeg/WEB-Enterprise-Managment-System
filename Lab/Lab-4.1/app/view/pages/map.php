<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Store</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/font/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./public/css/style.css?v=11">
</head>

<body>
    <?php include "./app/view/components/navbar.php"; ?>
    <h1>Map</h1>
    <!-- <div class="container">
        <div class="login-layout">
            <form style="border: 1px solid #ccc; padding: 10px">
                <div class="form-group mb-2">
                    <label for="exampleInputEmail1" class="ml-1 pb-0 mb-0">
                        <h6>Enter full address</h6>
                    </label>
                    <input type="text" class="form-control mt-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Longtitude">
                </div>
                <button type="submit" class="btn btn-primary" value="Submit">Find by address</button>
            </form>
            <form class="mt-4" style="border: 1px solid #ccc; padding: 10px">
                <div class="form-group mb-2">
                    <label for="exampleInputEmail1" class="ml-1 pb-0 mb-0">
                        <h6>Longitude</h6>
                    </label>
                    <input type="text" class="form-control mt-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Longtitude">
                </div>
                <div class="form-group mb-2">
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1" class="ml-1 pb-0 mb-0">
                            <h6>Latitude</h6>
                        </label>
                        <input type="text" class="form-control mt-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Latitude">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" value="Submit">Find by longtitude and latitude</button>
            </form>
        </div>
        <div id="googleMap" style="width:100%;height:400px;"></div>
    </div> -->
    <!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./public/js/navbar.js"></script> -->

    <script>
        // function myMap() {
        //     var mapProp = {
        //         center: new google.maps.LatLng(51.508742, -0.120850),
        //         zoom: 5,
        //     };
        //     var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        // }
    </script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAguYz0Y4l1_fOMfnUs-wCDyJTJuNRxPYk&callback=myMap"></script> -->
</body>

</html>