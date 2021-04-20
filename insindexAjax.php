<?php
session_start();
$logged=false;
if(isset($_SESSION["medicaluser"]))
  $logged=true;
else
  die("Non authorized user!");
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Search by Name</title>
  </head>
  <body>
    <div class="container">
         
    
    <?php      

    require_once __DIR__.'/sqlsts.php';
require_once __DIR__.'/insdbops.php';
require_once __DIR__.'/insviewcadet.php';
require_once __DIR__.'/inspageformat.php';

       pageheader("./images/gyc-logo.png","Search by Name", $logged);   
       if(isset($_GET["msg"]))
       {
         $msg=$_GET["msg"];
         echo "<h4 class=\"text-danger\">$msg Try again</h4>";
       }    

if(isset($_SESSION["medical"]))
  $logged=true;
else
  $logged=false;
$conn=connectDB();
  if(isset($_POST["PersonFN"]))
  {
    
       if(!$conn) {
          die("failed on DB conntion");
         
       }
 
   // echo  $_POST["PersonFN"]." ".$_POST["PersonLN"];
    $people=getPeople($conn, $_POST["PersonFN"],$_POST["PersonLN"]);
    
     viewCadet($people);
    $conn->close();
    exit;
  }
         ?>

   <form action="./insindexAjax.php" method="POST">
      <label >First Name:</label><br>
      <input type="text" list="listPersonFN" id="PersonFN" name="PersonFN" required="required" 
      onkeyup="searchPersonFN(this)"><br>
      <datalist id="listPersonFN"></datalist>
      <label >Last Name:</label><br>
      <input type="text" list="listPersonLN"  id="PersonLN" name="PersonLN" required="required" 
      onkeyup="searchPersonLN(this)" onfocus="showPersonLN(this)"><br><br>
      <datalist id="listPersonLN"></datalist>
      <input type="submit" value="Search">
   </form> 
  
   </div>
  
  <script type="text/javascript" src="javascript/inssearch.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>