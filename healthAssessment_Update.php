<?php 

include "db.php";
if (isset($_POST['update'])) {  
    $assessmentID = $_POST['assessmentID'];
    $t_ID = $_POST['t_ID'];
    $assessmentDate = $_POST['assessmentDate'];
    $healthStatus = $_POST['healthStatus'];
    $Ttreatment = $_POST['Ttreatment'];
    $vaccination = $_POST['vaccination'];
    $illness_Injury = $_POST['illness_Injury'];
    $carePlanning = $_POST['carePlanning'];

    $sql = "UPDATE `h_assessment` SET `t_ID`='$t_ID',`assessmentDate`='$assessmentDate',`healthStatus`='$healthStatus',`Ttreatment`='$Ttreatment',`vaccination`='$vaccination', `illness_Injury`='$illness_Injury', `carePlanning`='$carePlanning' WHERE `assessmentID`='$assessmentID'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">';
        echo 'Record updated successfully.';
        echo '</div>';
        echo "<script>console.log('Record updated successfully.');</script>";
        header( "refresh:2; url=./healthAssessment.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}    
if (isset($_GET['assessmentID'])) {   

    $assessmentID = $_GET['assessmentID']; 

    $sql = "SELECT * FROM `h_assessment` WHERE `assessmentID`='$assessmentID'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $assessmentID = $row['assessmentID'];
            $t_ID = $row['t_ID'];
            $assessmentDate = $row['assessmentDate'];
            $healthStatus = $row['healthStatus'];
            $Ttreatment = $row['Ttreatment'];
            $vaccination = $row['vaccination'];
            $illness_Injury = $row['illness_Injury'];
            $carePlanning = $row['carePlanning'];
         } 

    ?>

    <html>
    <head>
        <title>Health Assessment Update Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">
        <form action="" method="post">

          <fieldset>   
            <input type="hidden" name="assessmentID" value="<?php echo $assessmentID; ?>">

        <div class="form-group">
        <label for="t_ID">Tortoise ID:</label>
        <input type="text" class="form-control" name="t_ID" id="t_ID">
      </div>

      <div class="form-group">
        <label for="assessmentDate">Assessment Date:</label>
        <input type="date" class="form-control" name="assessmentDate" id="assessmentDate">
      </div>

      <div class="form-group">
        <label for="healthStatus">Health Status:</label>
        <input type="text" class="form-control" name="healthStatus" id="healthStatus">
      </div>

      <div class="form-group">
        <label for="Ttreatment">Treatment:</label>
        <input type="text" class="form-control" name="Ttreatment" id="Ttreatment">
      </div>

      <div class="form-group">
        <label for="vaccination">Vaccination:</label>
        <input type="text" class="form-control" name="vaccination" id="vaccination">
      </div>

      <div class="form-group">
        <label for="illness_Injury">Illness_Injury:</label>
        <input type="text" class="form-control" name="illness_Injury" id="illness_Injury">
      </div>

      <div class="form-group">
        <label for="carePlanning">Care Planning:</label>
        <input type="text" class="form-control" name="carePlanning" id="carePlanning">
      </div>

      <input type="submit" class="btn btn-primary" value="Update" name="update">

          </fieldset>

        </form> 
    </div>

    </body>
    </html> 

    <?php

    } else{ 

        header('Location: healthAssessment.php');

    } 

}

?>