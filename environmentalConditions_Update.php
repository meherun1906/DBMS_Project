<?php 

include "db.php";

if (isset($_POST['update'])) {  
    $recordID = $_POST['recordID'];
    $enclosureID = $_POST['enclosureID'];
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];
    $waterQuality = $_POST['waterQuality'];
    $record_Date = $_POST['record_Date'];

    $sql = "UPDATE `econditions` SET `enclosureID`='$enclosureID',`temperature`='$temperature',`humidity`='$humidity',`waterQuality`='$waterQuality',`record_Date`='$record_Date' WHERE `recordID`='$recordID'"; 

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
if (isset($_GET['recordID'])) {  

    $recordID = $_GET['recordID']; 

    $sql = "SELECT * FROM `econditions` WHERE `recordID`='$recordID'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $recordID = $row['recordID'];
            $enclosureID = $row['enclosureID'];
            $temperature = $row['temperature'];
            $humidity = $row['humidity'];
            $waterQuality = $row['waterQuality'];
            $record_Date = $row['record_Date'];
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
            <input type="hidden" name="recordID" value="<?php echo $recordID; ?>">

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