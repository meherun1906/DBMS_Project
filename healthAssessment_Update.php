<?php




include "db.php";




if (isset($_POST['update'])) {




    $AssessmentID = $_POST['AssessmentID'];
    $t_ID = $_POST['t_ID'];
    $AssessmentDate = $_POST['AssessmentDate'];
    $HealthStatus = $_POST['HealthStatus'];
    $Treatment = $_POST['Treatment'];
    $Vaccination = $_POST['Vaccination'];
    $Illness_Injury = $_POST['Illness_Injury'];
    $CarePlanning = $_POST['CarePlanning'];




    $sql = "UPDATE `healthassessment` SET `t_ID`='$t_ID',`AssessmentDate`='$AssessmentDate',`HealthStatus`='$',`Treatment`='$Treatment', `Vaccination`='$Vaccination', `Illness/Injury`='$Illness/Injury' , `CarePlanning`='$CarePlanning'   WHERE `AssessmentID`='$AssessmentID'";




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
if (isset($_GET['AssessmentID'])) {




    $AssessmentID = $_GET['AssessmentID'];




    $sql = "SELECT * FROM `healthassessment` WHERE `AssessmentID`='$AssessmentID'";




    $result = $conn->query($sql);




    if ($result->num_rows > 0) {        




        while ($row = $result->fetch_assoc()) {
            $AssessmentID = $row['AssessmentID'];
            $t_ID = $row['t_ID'];
            $AssessmentDate = $row['AssessmentDate'];
            $HealthStatus = $row['HealthStatus'];
            $Treatment = $row['Treatment'];
            $Vaccination = $row['Vaccination'];
            $Illness_Injury = $row['Illness_Injury'];
            $CarePlanning = $row['CarePlanning'];






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
            <input type="hidden" name="AssessmentID" value="<?php echo $AssessmentID; ?>">


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
        <label for="Illness_Injury">Illness/Injury:</label>
        <input type="text" class="form-control" name="Illness_Injury" id="Illness_Injury">
      </div>






      <div class="form-group">
        <label for="CarePlanning">Care Planning:</label>
        <input type="text" class="form-control" name="CarePlanning" id="CarePlanning">
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
