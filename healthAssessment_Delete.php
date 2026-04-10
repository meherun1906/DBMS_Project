<?php




include "db.php";




if (isset($_GET['AssessmentID'])) {




    $AssessmentID = $_GET['AssessmentID'];




    $sql = "DELETE FROM `healthassessment` WHERE `AssessmentID`='$AssessmentID'";




     $result = $conn->query($sql);




     if ($result == TRUE) {




        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./healthAssessment.php" );




    }else{




        echo "Error:" . $sql . "<br>" . $conn->error;




    }




}




?>


