<?php 
include "./db.php";


  if (isset($_POST['submit'])){           

    $assessmentID = $_POST['assessmentID'];

    $t_ID = $_POST['t_ID'];

    $assessmentDate = $_POST['assessmentDate'];

    $healthStatus = $_POST['healthStatus'];

    $Ttreatment = $_POST['Ttreatment'];

    $vaccination = $_POST['vaccination'];

    $illness_Injury = $_POST['illness_Injury'];

    $carePlanning = $_POST['carePlanning'];  

    $sql = "INSERT INTO `h_assessment`(`assessmentID`, `t_ID`, `assessmentDate`, `healthStatus`, `Ttreatment`,`vaccination`, `illness_Injury`,`carePlanning`) VALUES ('$assessmentID','$t_ID','$assessmentDate','$healthStatus','$Ttreatment', '$vaccination', '$illness_Injury', '$carePlanning')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo '<div class="alert alert-success" role="alert">New record created successfully!</div>';
      echo "<script>console.log('New record created successfully!');</script>";
      header( "refresh:2; url=./healthAssessment.php" );

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close();
   }
?>
<!DOCTYPE html>

<html>

<head>
  <title>Health Assessment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<div class="container">
  <h2>Health Assessment Form</h2>

  <form action="" method="POST">

    <fieldset>                      
      <div class="form-group">
        <label for="assessmentID">Assessment ID :</label>
        <input type="text" class="form-control" name="assessmentID" id="assessmentID">
      </div>

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


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </fieldset>

  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>