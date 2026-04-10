<?php 

include "db.php"; 

if (isset($_GET['FeedingID'])) {

    $FeedingID = $_GET['FeedingID'];

    $sql = "DELETE FROM `logfeedingtimes` WHERE `FeedingID`='$FeedingID'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./feedingTimes.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>