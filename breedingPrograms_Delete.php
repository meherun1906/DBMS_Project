<?php 

include "db.php"; 

if (isset($_GET['p_ID'])) {    

    $p_ID = $_GET['p_ID'];

    $sql = "DELETE FROM `breedingprograms` WHERE `p_ID`='$p_ID'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./breedingProgram.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>