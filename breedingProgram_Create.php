<?php
include "./db.php";




  if (isset($_POST['submit'])){

    $Program_ID = $_POST['Program_ID'];

    $MaitingPairs = $_POST['MaitingPairs'];

    $NestingDate = $_POST['NestingDate'];

    $EggCount = $_POST['EggCount'];




    $IncubationDate = $_POST['IncubationDate'];




    $SuccessRate = $_POST['SuccessRate'];




    $Observations = $_POST['Observations'];




    $sql = "INSERT INTO `breedingprogram`( `Program_ID`, `MaitingPairs`, `NestingDate`, `EggCount`, `IncubationDate`, `SuccessRate, `Observations` ) VALUES ('$Program_ID','$MaitingPairs','$NestingDate','$EggCount','$IncubationDate', '$SuccessRate','$Observations')";
    $result = $conn->query($sql);




    if ($result == TRUE) {




      echo '<div class="alert alert-success" role="alert">New record created successfully!</div>';
      echo "<script>console.log('New record created successfully!');</script>";
      header( "refresh:2; url=./breedingProgram.php" );




    }else{




      echo "Error:". $sql . "<br>". $conn->error;




    }




    $conn->close();
   }
?>
<!DOCTYPE html>




<html>




<head>
  <title>Breeding Program</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>




<body>




<div class="container">
  <h2>Breeding Program Form</h2>




  <form action="" method="POST">




    <fieldset>

      <div class="form-group">
        <label for="Program_ID">Program ID :</label>
        <input type="text" class="form-control" name="Program_ID" id="Program_ID">
      </div>




      <div class="form-group">
        <label for="MaitingPairs">MaitingPairs:</label>
        <input type="text" class="form-control" name="MaitingPairs" id="MaitingPairs">
      </div>




      <div class="form-group">
        <label for="NestingDate">NestingDate:</label>
        <input type="date" class="form-control" name="NestingDate" id="NestingDate">
      </div>




      <div class="form-group">
        <label for="EggCount">EggCount:</label>
        <input type="text" class="form-control" name="EggCount" id="EggCount">
      </div>




      <div class="form-group">
        <label for="IncubationDate">Incubation Date:</label>
        <input type="text" class="form-control" name="IncubationDate" id="IncubationDate">
      </div>




      <div class="form-group">
        <label for="SuccessRate">SuccessRate:</label>
        <input type="text" class="form-control" name="SuccessRate" id="SuccessRate">
      </div>




      <div class="form-group">
        <label for="Observations">:</label>
        <input type="text" class="form-control" name="Observations" id="Observations">
      </div>



      <input type="submit" name="submit" value="Submit" class="btn btn-primary">




    </fieldset>




  </form>
</div>




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>




</html>
 


