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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
<title>Medication</title>
  </head>
  <body>
    <div class="container">
         
    
    <?php
       $dir=dirname(dirname(__FILE__));

       require_once $dir.'/inspageformat.php';
       require_once 'insgenmedforms.php';
       require_once $dir.'/sqlsts.php';
       require_once $dir.'/insdbops.php';
              
       if(!isset($_GET["MedID"]))
       {
         die("No medical ID is found!");

       }

       $fkClassDetailID=$_GET["fkClassDetailID"];
       $MedID=$_GET["MedID"];
    
    
      pageheader("../images/gyc-logo.png","Search by Name", true);
      $conn=connectDB();
      $query="SELECT tblpeople.PersonFN, tblpeople.PersonLN FROM tblpeople
JOIN tblcadets on tblcadets.fkPersonID =tblpeople.PersonID
JOIN tblclassdetails on tblclassdetails.fkCadetID=tblcadets.CadetID
JOIN tblmeds on tblmeds.fkClassDetailID=tblclassdetails.ClassDetailID 
WHERE tblmeds.fkClassDetailID=\"$fkClassDetailID\"";
     $arr=getResultFromTable($conn,$query);
  $fname=$arr[0]["PersonFN"];
  $lname=$arr[0]["PersonLN"];
  
   printCadetName($fname, $lname);
   echo<<<_END
      <div class="card bg-light border-dark mt-3 mb-5 ">  
        <div  class="card-text">
         <form action="./inseditmedshandle.php" method="POST">
_END;
    $query="SELECT * FROM tblmeds WHERE MedID=\"$MedID\"";
    $arr=getResultFromTable($conn,$query);
    $record=$arr[0];
    printMedicationForm($conn, $record,$fkClassDetailID);

   echo <<<_END
         <div class="form-group row mt-1 ml-1">
                  
                  <div class="offset-1 col-2">
                     <input type="submit" value="Edit">
                  </div>
                   
          </div>
          </form>
        </div>
      </div>
    
_END;

echo "";



      $conn->close();
         ?>
   

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