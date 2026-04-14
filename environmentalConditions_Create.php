<?php 
include "./db.php";

  if (isset($_POST['submit'])){           

    $recordID = $_POST['recordID'];

    $enclosureID = $_POST['enclosureID'];

    $temperature = $_POST['temperature'];

    $humidity = $_POST['humidity'];

    $waterQuality = $_POST['waterQuality'];

    $record_Date = $_POST['record_Date'];  

    $sql = "INSERT INTO `econditions`(`recordID`, `enclosureID`, `temperature`, `humidity`, `waterQuality`,`record_Date`) VALUES ('$recordID','$enclosureID','$temperature','$humidity','$waterQuality', '$record_Date')";
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
      <div class="form-group">
        <label for="recordID">Record ID :</label>
        <input type="text" class="form-control" name="recordID" id="recordID">
      </div>

      <div class="form-group">
        <label for="enclosureID">Enclosure ID:</label>
        <input type="text" class="form-control" name="enclosureID" id="enclosureID">
      </div>

      <div class="form-group">
        <label for="temperature">Temperature:</label>
        <input type="text" class="form-control" name="temperature" id="temperature">
      </div>

      <div class="form-group">
        <label for="humidity">Humidity:</label>
        <input type="text" class="form-control" name="humidity" id="humidity">
      </div>

      <div class="form-group">
        <label for="waterQuality">Water Quality:</label>
        <input type="text" class="form-control" name="waterQuality" id="waterQuality">
      </div>

      <div class="form-group">
        <label for="record_Date">Record Date:</label>
        <input type="date" class="form-control" name="record_Date" id="record_Date">
      </div>


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </fieldset>

  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>