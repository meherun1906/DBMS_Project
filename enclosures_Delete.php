<?php 

include "db.php"; 

if (isset($_GET['enclosureID'])) {    

    $enclosureID = $_GET['enclosureID'];

    $sql = "DELETE FROM `enclosuredetails` WHERE `enclosureID`='$enclosureID'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./enclosure.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>