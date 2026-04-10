<?php




include "db.php";




if (isset($_POST['update'])) {




    $Program_ID = $_POST['Program_ID'];
    $MaitingPairs = $_POST['MaitingPairs'];
    $NestingDate = $_POST['NestingDate'];
    $EggCount = $_POST['EggCount'];
    $IncubationDate = $_POST['IncubationDate'];
    $SuccessRate = $_POST['SuccessRate'];
    $Observations = $_POST['Observations'];






    $sql = "UPDATE `breedingProgram` SET `MaitingPairs`='$MaitingPairs',`NestingDate`='$NestingDate',`EggCount`='$EggCount',`IncubationDate`='$IncubationDate', `SuccessRate`='$SuccessRate', `Observations`='$Observations',  WHERE `Program_ID`='$Program_ID'";




    $result = $conn->query($sql);




    if ($result == TRUE) {




        echo '<div class="alert alert-success" role="alert">';
        echo 'Record updated successfully.';
        echo '</div>';
        echo "<script>console.log('Record updated successfully.');</script>";
        header( "refresh:2; url=./breedingProgram.php" );




    }else{




        echo "Error:" . $sql . "<br>" . $conn->error;




    }




}
if (isset($_GET['Program_ID'])) {




    $t_ID = $_GET['Program_ID'];




    $sql = "SELECT * FROM `breedingProgram` WHERE `t_ID`='$Program_ID'";




    $result = $conn->query($sql);




    if ($result->num_rows > 0) {        




        while ($row = $result->fetch_assoc()) {
            $Program_ID = $row['Program_ID'];
            $MaitingPairs = $row['MaitingPairs'];
            $NestingDate = $row['NestingDate'];
            $EggCount = $row['EggCount'];
            $IncubationDate = $row['IncubationDate'];
            $SuccessRate = $row['SuccessRate'];
            $Observations = $row['Observations'];




         }




    ?>




    <html>
    <head>
        <title>Breeding Program Update Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>




    <div class="container">




        <form action="" method="post">




          <fieldset>


            <input type="hidden" name="Program_ID" value="<?php echo $Program_ID; ?>">




        <div class="form-group">
        <label for="MaitingPairs">Maiting Pairs:</label>
        <input type="text" class="form-control" name="MaitingPairs" id="MaitingPairs">
      </div>




      <div class="form-group">
        <label for="NestingDate">Nesting Date:</label>
        <input type="text" class="form-control" name="NestingDate" id="NestingDate">
      </div>




      <div class="form-group">
        <label for="EggCount">Egg Count:</label>
        <input type="text" class="form-control" name="EggCount" id="EggCount">
      </div>




      <div class="form-group">
        <label for="IncubationDate">Incubation Date:</label>
        <input type="text" class="form-control" name="IncubationDate" id="IncubationDate">
      </div>




      <div class="form-group">
        <label for="SuccessRate">Success Rate:</label>
        <input type="text" class="form-control" name="SuccessRate" id="SuccessRate">
      </div>




      <div class="form-group">
        <label for="Observations">Observations:</label>
        <input type="text" class="form-control" name="Observations" id="Observations">
      </div>
     
      <input type="submit" class="btn btn-primary" value="Update" name="update">




          </fieldset>




        </form>
    </div>




    </body>
    </html>




    <?php




    } else{




        header('Location: breedingProgram.php');




    }




}




?>
