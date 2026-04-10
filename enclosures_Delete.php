<?php
include "db.php";

if (isset($_GET['EnclosureID'])) {

    $EnclosureID = $_GET['EnclosureID'];
    $sql = "DELETE FROM `enclosuredetails` WHERE `EnclosureID`='$EnclosureID'";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./enclosures.php" );

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

}
?>
