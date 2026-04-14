<?php 

include "db.php"; 

if (isset($_GET['f_ID'])) {

    $f_ID = $_GET['f_ID'];

    $sql = "DELETE FROM `feedingtimes` WHERE `f_ID`='$f_ID'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./feedingTimes.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>