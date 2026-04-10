<?php 
include "./db.php";

  if (isset($_POST['submit'])){ 

    $RecordID = $_POST['RecordID'];

    $EncloserID = $_POST['EncloserID'];

    $Temperature = $_POST['Temperature'];

    $Humidity = $_POST['Humidity'];

    $WaterQuality = $_POST['WaterQuality'];

    $Record_Date = $_POST['Record_Date'];  

    $sql = "INSERT INTO `environmentalconditions`(`RecordID`, `EncloserID`, `Temperature`, `Humidity`, `WaterQuality`, `Record_Date`) VALUES ('$t_ID','$species','$age','$gender','$healthStatus', '$history')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo '<div class="alert alert-success" role="alert">New record created successfully!</div>';
      echo "<script>console.log('New record created successfully!');</script>";
      header( "refresh:2; url=./environmentalConditions.php" ); 

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close();
   }
?>
<!DOCTYPE html>

<html>

<head>
  <title>Environmental Conditions</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<div class="container">
  <h2>Environmental Conditions Form</h2>

  <form action="" method="POST">

    <fieldset>                      
                                                                    
        <label for="RecordID">Record ID :</label>
        <input type="text" class="form-control" name="RecordID" id="RecordID">
      </div>

      <div class="form-group">
        <label for="EncloserID">Encloser ID:</label>
        <input type="text" class="form-control" name="EncloserID" id="EncloserID">
      </div>

      <div class="form-group">
        <label for="Temperature">Temperature:</label>
        <input type="text" class="form-control" name="Temperature" id="Temperature">
      </div>

      <div class="form-group">
        <label for="Humidity">Humidity:</label>
        <input type="text" class="form-control" name="Humidity" id="Humidity">
      </div>

      <div class="form-group">
        <label for="WaterQuality">Water Quality:</label>
        <input type="text" class="form-control" name="WaterQuality" id="WaterQuality">
      </div>

      <div class="form-group">
        <label for="Record_Date">Record Date:</label>
        <input type="date" class="form-control" name="Record_Date" id="Record_Date">
      </div>


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </fieldset>

  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>