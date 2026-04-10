<?php
include "./db.php";




  if (isset($_POST['submit'])){




    $AssessmentID = $_POST['AssessmentID'];




    $t_ID = $_POST['t_ID'];




    $AssessmentDate = $_POST['AssessmentDate'];




    $HealthStatus = $_POST['HealthStatus'];




    $Vaccination = $_POST['Vaccination'];




    $Illness_Injury = $_POST['Illness/Injury'];




    $CarePlanning = $_POST['CarePlanning'];




    $sql = "INSERT INTO `healthassessment`(`AssessmentID`, `t_ID`, `AssessmentDate`, `HealthStatus`, `Treatment`, `Vaccination`, `Illness/Injury`, `CarePlanning`) VALUES ('$AssessmentID','$t_ID','$AssessmentDate','$HealthStatus','$Treatment', '$Vaccination','$Illness/Injury','$CarePlanning')";
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
        <label for="AssessmentID">Assessment ID :</label>
        <input type="text" class="form-control" name="AssessmentID" id="AssessmentID">
      </div>




      <div class="form-group">
        <label for="t_ID">Tortoise ID:</label>
        <input type="text" class="form-control" name="t_ID" id="t_ID">
      </div>




      <div class="form-group">
        <label for="AssessmentDate">Assessment Date:</label>
        <input type="text" class="form-control" name="AssessmentDate" id="AssessmentDate">
      </div>




      <div class="form-group">
        <label for="HealthStatus">Health Status:</label>
        <input type="text" class="form-control" name="HealthStatus" id="HealthStatus">
      </div>




      <div class="form-group">
        <label for="Treatment">Treatment:</label>
        <input type="text" class="form-control" name="Treatment" id="Treatment">
      </div>




      <div class="form-group">
        <label for="Vaccination">Vaccination:</label>
        <input type="text" class="form-control" name="Vaccination" id="Vaccination">
      </div>




      <div class="form-group">
        <label for="Illness/Injury">Illness/Injury:</label>
        <input type="text" class="form-control" name="Illness/Injury" id="Illness/Injury">
      </div>








      <div class="form-group">
        <label for="CarePlanning">Care Planning:</label>
        <input type="text" class="form-control" name="CarePlanning" id="CarePlanning">
      </div>










      <input type="submit" name="submit" value="Submit" class="btn btn-primary">




    </fieldset>




  </form>
</div>




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>




</html>




