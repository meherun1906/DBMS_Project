<?php 

include "db.php";

if (isset($_POST['update'])) {  
    $enclosureID = $_POST['enclosureID'];
    $e_size = $_POST['e_size'];
    $habitatType = $_POST['habitatType'];
    $currentOccupants = $_POST['currentOccupants'];
    $maintenanceSchedule = $_POST['maintenanceSchedule'];
    $environmentalParameters = $_POST['environmentalParameters'];

    $sql = "UPDATE `enclosuredetails` SET `e_size`='$e_size',`habitatType`='$habitatType',`currentOccupants`='$currentOccupants',`maintenanceSchedule`='$maintenanceSchedule',`environmentalParameters`='$environmentalParameters' WHERE `enclosureID`='$enclosureID'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">';
        echo 'Record updated successfully.';
        echo '</div>';
        echo "<script>console.log('Record updated successfully.');</script>";
        header( "refresh:2; url=./enclosure.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}    
if (isset($_GET['enclosureID'])) {   

    $enclosureID = $_GET['enclosureID']; 

    $sql = "SELECT * FROM `enclosuredetails` WHERE `enclosureID`='$enclosureID'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $enclosureID = $row['enclosureID'];
            $e_size = $row['e_size'];
            $habitatType = $row['habitatType'];
            $currentOccupants = $row['currentOccupants'];
            $maintenanceSchedule = $row['maintenanceSchedule'];
            $environmentalParameters = $row['environmentalParameters'];
         } 

    ?>

    <html>
    <head>
        <title>Encloser Details Update Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">
        <form action="" method="post">

          <fieldset>   
            <input type="hidden" name="enclosureID" value="<?php echo $enclosureID; ?>">

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

      
      <input type="submit" class="btn btn-primary" value="Update" name="update">

          </fieldset>

        </form> 
    </div>

    </body>
    </html> 

    <?php

    } else{ 

        header('Location: breedingProgram.php');

    } 

}

?>