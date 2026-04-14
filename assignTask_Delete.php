<?php 

include "db.php"; 

if (isset($_GET['TaskID'])) {    

    $TaskID = $_GET['TaskID'];

    $sql = "DELETE FROM `task` WHERE `TaskID`='$TaskID'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./assignTask.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>