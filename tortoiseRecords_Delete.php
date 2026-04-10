<?php 

include "db.php"; 

if (isset($_GET['t_ID'])) {

    $t_ID = $_GET['t_ID'];

    $sql = "DELETE FROM `tortoiserecords` WHERE `t_ID`='$t_ID'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./tortoiseRecords.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>