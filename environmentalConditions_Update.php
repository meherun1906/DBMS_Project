<?php 

include "db.php";

if (isset($_POST['update'])) {   

    $RecordID = $_POST['RecordID'];
    $EncloserID = $_POST['EncloserID'];
    $Temperature = $_POST['Temperature'];
    $Humidity = $_POST['Humidity'];
    $WaterQuality = $_POST['WaterQuality'];
    $Record_Date = $_POST['Record_Date'];

    $sql = "UPDATE `environmentalconditions` SET `EncloserID`='$EncloserID',`Temperature`='$Temperature',`Humidity`='$Humidity',`WaterQuality`='$WaterQuality', `Record_Date`='$Record_Date'  WHERE `RecordID`='$RecordID'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">';
        echo 'Record updated successfully.';
        echo '</div>';
        echo "<script>console.log('Record updated successfully.');</script>";
        header( "refresh:2; url=./environmentalConditions.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
if (isset($_GET['RecordID'])) {

    $RecordID = $_GET['RecordID']; 

    $sql = "SELECT * FROM `environmentalconditions` WHERE `RecordID`='$RecordID'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {       
        while ($row = $result->fetch_assoc()) {
            $RecordID = $row['RecordID'];
            $EncloserID = $row['EncloserID'];
            $Temperature = $row['Temperature'];
            $Humidity = $row['Humidity'];
            $WaterQuality = $row['WaterQuality'];
            $Record_Date = $row['Record_Date'];

         } 

    ?>

    <html>
    <head>
        <title>Environmental Conditions Update Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">

        <form action="" method="post">

          <fieldset>

        <input type="hidden" name="RecordID" value="<?php echo $RecordID; ?>">

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
      <input type="submit" class="btn btn-primary" value="Update" name="update">

          </fieldset>

        </form> 
    </div>

    </body>
    </html> 

    <?php

    } else{ 

        header('Location: environmentalConditions.php');

    } 

}

?>