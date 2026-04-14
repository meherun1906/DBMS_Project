<?php 
include "./db.php";


  if (isset($_POST['submit'])){           

    $enclosureID = $_POST['enclosureID'];

    $e_size = $_POST['e_size'];

    $habitatType = $_POST['habitatType'];

    $currentOccupants = $_POST['currentOccupants'];

    $maintenanceSchedule = $_POST['maintenanceSchedule'];

    $environmentalParameters = $_POST['environmentalParameters'];  

    $sql = "INSERT INTO `enclosuredetails`(`enclosureID`, `e_size`, `habitatType`, `currentOccupants`, `maintenanceSchedule`,`environmentalParameters`) VALUES ('$enclosureID','$e_size','$habitatType','$currentOccupants','$maintenanceSchedule', '$environmentalParameters')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo '<div class="alert alert-success" role="alert">New record created successfully!</div>';
      echo "<script>console.log('New record created successfully!');</script>";
      header( "refresh:2; url=./enclosure.php" ); 

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
        <label for="enclosureID">Enclosure ID :</label>
        <input type="text" class="form-control" name="enclosureID" id="enclosureID">
      </div>

      <div class="form-group">
        <label for="e_size">Size:</label>
        <input type="text" class="form-control" name="e_size" id="e_size">
      </div>

      <div class="form-group">
        <label for="habitatType">Habitat Type:</label>
        <input type="text" class="form-control" name="habitatType" id="habitatType">
      </div>

      <div class="form-group">
        <label for="currentOccupants">Current Occupants:</label>
        <input type="text" class="form-control" name="currentOccupants" id="currentOccupants">
      </div>

      <div class="form-group">
        <label for="maintenanceSchedule">Maintenance Schedule:</label>
        <input type="text" class="form-control" name="maintenanceSchedule" id="maintenanceSchedule">
      </div>

      <div class="form-group">
        <label for="environmentalParameters">Environmental Parameters:</label>
        <input type="text" class="form-control" name="environmentalParameters" id="environmentalParameters">
      </div>


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </fieldset>

  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>