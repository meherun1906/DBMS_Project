<?php 
include "./db.php";

  if (isset($_POST['submit'])){

    $t_ID = $_POST['t_ID'];

    $species = $_POST['species'];

    $age = $_POST['age'];

    $gender = $_POST['gender'];

    $healthStatus = $_POST['healthStatus'];

    $history = $_POST['history'];

    $sql = "INSERT INTO `tortoiserecords`(`t_ID`, `species`, `age`, `gender`, `healthStatus`, `history`) VALUES ('$t_ID','$species','$age','$gender','$healthStatus', '$history')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo '<div class="alert alert-success" role="alert">New record created successfully!</div>';
      echo "<script>console.log('New record created successfully!');</script>";
      header( "refresh:2; url=./tortoiseRecords.php" ); 

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close();
   }
?>
<!DOCTYPE html>

<html>

<head>
  <title>Tortoise Records</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<div class="container">
  <h2>Tortoise Records Form</h2>

  <form action="" method="POST">

    <fieldset>                      

      <div class="form-group">
        <label for="t_ID">Tortoise ID :</label>
        <input type="text" class="form-control" name="t_ID" id="t_ID">
      </div>

      <div class="form-group">
        <label for="species">Species:</label>
        <input type="text" class="form-control" name="species" id="species">
      </div>

      <div class="form-group">
        <label for="age">Age:</label>
        <input type="text" class="form-control" name="age" id="age">
      </div>

      <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="text" class="form-control" name="gender" id="gender">
      </div>

      <div class="form-group">
        <label for="healthStatus">Health Status:</label>
        <input type="text" class="form-control" name="healthStatus" id="healthStatus">
      </div>

      <div class="form-group">
        <label for="history">History:</label>
        <input type="text" class="form-control" name="history" id="history">
      </div>


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </fieldset>

  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>