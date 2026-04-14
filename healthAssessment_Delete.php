<?php 

include "db.php"; 

if (isset($_GET['assessmentID'])) {    

    $assessmentID = $_GET['assessmentID'];

    $sql = "DELETE FROM `h_assessment` WHERE `assessmentID`='$assessmentID'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./healthAssessment.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>