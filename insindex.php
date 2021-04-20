<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid bg-info">
     
      <?php
       require_once 'sqlsts.php';
require_once 'insdbops.php';
require_once 'insviewcadet.php';
require_once 'inspageformat.php';

       pageheader("./images/gyc-logo.png","Search by Name", false); 

      ?>

     
    <div class="row mt-5">
        <div class="col-4">
            <h4>OUR MISSION </h4>
            
        </div>     
        <div class="col-4">
            <h4>OUR VALUE </h4>
            <p>The Georgia Youth ChalleNGe Program is the premiere residential alternative education provider; developing and producing academically and socially competitive young adults who believe they can achieve their dreams.  </p>
        </div>
        <div class="col-4">
            <h4>OUR VISION  </h4> 
            <p>The Georgia National Guard Youth ChalleNGe Program will be known as a viable, community-oriented intervention program committed to providing an environment for Georgia's 16-18 year olds to obtain the education and life skills needed to become productive citizens with sustainable futures.  </p>         
        </div>
    </div>
  
    <div class="row"></div>




    </div>

    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>