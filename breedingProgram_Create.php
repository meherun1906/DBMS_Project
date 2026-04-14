<?php 
include "./db.php";

  if (isset($_POST['submit'])){           

    $p_ID = $_POST['p_ID'];

    $maitingPairs = $_POST['maitingPairs'];

    $nestingDate = $_POST['nestingDate'];

    $eggCount = $_POST['eggCount'];

    $incubationDate = $_POST['incubationDate'];

    $successRate = $_POST['successRate'];

    $observations = $_POST['observations'];

    $sql = "INSERT INTO `breedingprograms`(`p_ID`, `maitingPairs`, `nestingDate`, `eggCount`, `incubationDate`, `successRate`, `observations`) VALUES ('$p_ID','$maitingPairs','$nestingDate','$eggCount','$incubationDate','$successRate','$observations')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo '<div class="alert alert-success" role="alert">New record created successfully!</div>';
      echo "<script>console.log('New record created successfully!');</script>";
      header( "refresh:2; url=./breedingProgram.php" ); 

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close();
   }
?>
<!DOCTYPE html>

<html>

<head>
  <title>Breeding Programs</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<div class="container">
  <h2>Breeding Program Form</h2>

  <form action="" method="POST">

    <fieldset>                      

      <div class="form-group">
        <label for="p_ID">Program ID :</label>
        <input type="text" class="form-control" name="p_ID" id="p_ID">
      </div>

      <div class="form-group">
        <label for="maitingPairs">Maiting Pairs:</label>
        <input type="text" class="form-control" name="maitingPairs" id="maitingPairs">
      </div>

      <div class="form-group">
        <label for="nestingDate">Nesting Date:</label>
        <input type="date" class="form-control" name="nestingDate" id="nestingDate">
      </div>

      <div class="form-group">
        <label for="eggCount">Egg Count:</label>
        <input type="text" class="form-control" name="eggCount" id="eggCount">
      </div>

      <div class="form-group">
        <label for="incubationDate">Incubation Period:</label>
        <input type="text" class="form-control" name="incubationDate" id="incubationDate">
      </div>

      <div class="form-group">
        <label for="successRate">Success Rate:</label>
        <input type="text" class="form-control" name="successRate" id="successRate">
      </div>

      <div class="form-group">
        <label for="observations">Observations:</label>
        <input type="text" class="form-control" name="observations" id="observations">
      </div>


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </fieldset>

  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>