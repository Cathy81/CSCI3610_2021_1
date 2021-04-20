<?php
 session_start();
 if(isset($_SESSION["PersonID"]))
   $PersonID=$_SESSION["PersonID"];
 else
  die("Please select Person first");

?>
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
              
     
      pageheader("../images/gyc-logo.png","Search by Name", true);
    
      $conn=connectDB();
       if(!$conn) {
          die("failed on DB conntion");
       }
     //  echo "Connected!";
    
    // $query="INSERT INTO tblmeds(fkClassDetailID, fkMedType, MedName, Dose, Frequency, TakenWhen, MedStartDate, MedEndDate, MedNote) VALUES ({$_POST["fkClassDetailID"]},{$_POST['fkMedType']}, {$_POST['MedName']}, {$_POST['Dose']}, {$_POST['Frequency']}, {$_POST['TakenWhen']}, {$_POST['MedStartDate']}, {$_POST['MedEndDate']}, {$_POST['MedNote']})";
  
  $fkClassDetailID=$_POST["fkClassDetailID"];
  $fkMedType=$_POST["fkMedType"];
  $MedName=$_POST["MedName"];
  $Dose=$_POST["Dose"];
  $Frequency=$_POST["Frequency"];
  $TakenWhen=$_POST["TakenWhen"];
  $MedStartDate=$_POST["MedStartDate"];
  $MedEndDate=$_POST["MedEndDate"];
  $MedNote=$_POST["MedNote"];
  echo $MedNote;
    $query="INSERT INTO tblmeds(fkClassDetailID, fkMedType, MedName, Dose, Frequency, TakenWhen, MedStartDate, MedEndDate, MedNote) VALUES(\"$fkClassDetailID\", \"$fkMedType\", \"$MedName\", \"$Dose\", \"$Frequency\", \"$TakenWhen\", \"$MedStartDate\", \"$MedEndDate\", \"$MedNote\")";
  $result=$conn->query($query);
    if(!$result) 
      {
  //      echo "query is not correct!";
        die ("query can not be executed!");
      }
    echo "<h4>The record has been added!</h4>";
    echo "<a class=\"btn btn-primary\" href=\"insmedication.php?PersonID=$PersonID\" >View Medications</a>";

    $conn->close();
  
    ?>

  
   </div>

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
