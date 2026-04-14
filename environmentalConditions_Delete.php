<?php 

include "db.php"; 

if (isset($_GET['recordID'])) {
    $recordID = $_GET['recordID'];

    $sql = "DELETE FROM `econditions` WHERE `recordID`='$recordID'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./environmentalConditions.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>