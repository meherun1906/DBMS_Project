<?php




include "db.php";




if (isset($_GET['Program_ID'])) {




    $Program_ID = $_GET['Program_ID'];




    $sql = "DELETE FROM `breedingprogram` WHERE `breedingProgram`='$breedingProgram'";




     $result = $conn->query($sql);




     if ($result == TRUE) {




        echo '<div class="alert alert-success" role="alert">Record successfully deleted!</div>';
        header( "refresh:2; url=./breedingProgram.php" );




    }else{




        echo "Error:" . $sql . "<br>" . $conn->error;




    }




}




?>


