<?php
include "./db.php";




  if (isset($_POST['submit'])){
    $enclosureID = $_POST['EnclosureID'];

    $size = $_POST['Size'];

    $habitatType = $_POST['HabitatType'];

    $currentOccupants = $_POST['CurrentOccupants'];

    $maintenanceShedule = $_POST['MaintenanceShedule'];


    $environmentalParameters = $_POST['EnvironmentalParameters'];

    $sql = "INSERT INTO `enclosures`(`EnclosureID`, `Size`, `HabitatType`, `CurrentOccupants`, `MaintenanceShedule`, `EnvironmentalParameters`) VALUES('$EnclosureID','$Size','$HabitatType','$CurrentOccupants','$MaintenanceShedule', '$EnvironmentalParameters')";
    $result = $conn->query($sql);


    if ($result == TRUE) {

      echo '<div class="alert alert-success" role="alert">New record created successfully!</div>';
      echo "<script>console.log('New record created successfully!');</script>";
      header( "refresh:2; url=./enclosures.php" );

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();
   }
?>
<!DOCTYPE html>

<html>

<head>
  <title>Enclosure Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<div class="container">
  <h2>Enclosure Details Form</h2>

  <form action="" method="POST">

    <fieldset>                    

      <div class="form-group">
        <label for="EnclosuerID">Enclosure ID :</label>
        <input type="text" class="form-control" name="EnclosuerID" id="EnclosureID">
      </div>

      <div class="form-group">
        <label for="Size">Size:</label>
        <input type="text" class="form-control" name="Size" id="Size">
      </div>

      <div class="form-group">
        <label for="HabitatType">Habitat Type:</label>
        <input type="text" class="form-control" name="HabitatType" id="HabitatType">
      </div>


      <div class="form-group">
        <label for="CurrentOccupants">Current Occupants:</label>
        <input type="text" class="form-control" name="CurrentOccupants" id="CurrentOccupants">
      </div>

      <div class="form-group">
        <label for="MaintenanceShedule">Maintenance Schedule:</label>
        <input type="text" class="form-control" name="MaintenanceShedule" id="MaintenanceShedule">
      </div>

      <div class="form-group">
        <label for="EnvironmentalParameters">Environmental Parameters:</label>
        <input type="text" class="form-control" name="EnvironmentalParameters" id="EnvironmentalParameters">
      </div>


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </fieldset>

  </form>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
