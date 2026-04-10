<?php 

include "db.php"; 

if (isset($_GET['RecordID'])) {

    $RecordID = $_GET['RecordID'];

    $sql = "DELETE FROM `environmentalconditions` WHERE `RecordID`='$RecordID'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./environmentalConditions.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>