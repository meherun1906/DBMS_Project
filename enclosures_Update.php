<?php

include "db.php";


if (isset($_POST['update'])) {
    $EnclosureID = $_POST['EnclosureID'];
    $Size = $_POST['Size'];
    $HabitatType = $_POST['HabitatType'];
    $CurrentOccupants = $_POST['CurrentOccupants'];
    $MaintenanceShedule = $_POST['MaintenanceShedule'];
    $EnvironmentalParameters = $_POST['EnvironmentalParameters'];

    $sql = "UPDATE `enclosuredetails` SET `Size`='$Size',`HabitatType`='$HabitatType',`CurrentOccupants`='$CurrentOccupants',`MaintenanceShedule`='$MaintenanceShedule', `EnvironmentalParameters`='$EnvironmentalParameters'  WHERE `EnclosureID`='$EnclosureID'";

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
if (isset($_GET['EnclosureID '])) {
    $EnclosureID = $_GET['EnclosureID'];
    $sql = "SELECT * FROM `enclosuredetails` WHERE `EnclosureID`='$EnclosureID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {  
        while ($row = $result->fetch_assoc()) {
            $EnclosureID = $row['EnclosureID'];
            $Size = $row['Size'];
            $HabitatType = $row['HabitatType'];
            $CurrentOccupants = $row['CurrentOccupants'];
            $MaintenanceShedule = $row['MaintenanceShedule'];
            $EnvironmentalParameters = $row['EnvironmentalParameters'];

         }
    ?>

    <html>
    <head>
        <title>Enclosure Update Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">
        <form action="" method="post">
          <fieldset>

        <input type="hidden" name="EnclosureID" value="<?php echo $EnclosureID; ?>">

        <div class="form-group">
        <label for="Size">Size:</label>
        <input type="text" class="form-control" name="Size" id="Size">
      </div>
      <div class="form-group">
        <label for="HabitatType">HabitatType:</label>
        <input type="text" class="HabitatType" name="HabitatType" id="HabitatType">
      </div>
      <div class="form-group">
        <label for="CurrentOccupants">CurrentOccupants:</label>
        <input type="text" class="form-control" name="CurrentOccupants" id="CurrentOccupants">
      </div>
      <div class="form-group">
        <label for="MaintenanceShedule">MaintenanceShedule:</label>
        <input type="text" class="form-control" name="MaintenanceShedule" id="MaintenanceShedule">
      </div>
      <div class="form-group">
        <label for="EnvironmentalParameters">EnvironmentalParameters:</label>
        <input type="text" class="form-control" name="EnvironmentalParameters" id="EnvironmentalParameters">
      </div>
     
      <input type="submit" class="btn btn-primary" value="Update" name="update">
          </fieldset>
        </form>
    </div>

    </body>
    </html>
    <?php

    } else{
        header('Location: enclosures.php');
    }

}
?>

