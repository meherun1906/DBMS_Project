<?php 
include "./db.php";

  if (isset($_POST['submit'])){

    $FeedingID = $_POST['FeedingID'];

    $t_ID = $_POST['t_ID'];

    $FoodType = $_POST['FoodType'];

    $FeedingTime = $_POST['FeedingTime'];

    $Quantity = $_POST['Quantity'];

    $DietNotes = $_POST['DietNotes'];

    $Stock = $_POST['Stock'];

    $sql = "INSERT INTO `logfeedingtimes`(`FeedingID`, `t_ID`, `FoodType`, `FeedingTime`, `Quantity`, `DietNotes`, `Stock`) VALUES ('$FeedingID','$t_ID','$FoodType','$FeedingTime','$Quantity', '$DietNotes', '$Stock')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo '<div class="alert alert-success" role="alert">New record created successfully!</div>';
      echo "<script>console.log('New record created successfully!');</script>";
      header( "refresh:2; url=./feedingTimes.php" ); 

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close();
   }
?>
<!DOCTYPE html>

<html>

<head>
  <title>Log Feeding Times</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<div class="container">
  <h2>Feeding Times Form</h2>

  <form action="" method="POST">

    <fieldset>                     
<div class="form-group">
        <label for="FeedingID">Feeding ID :</label>
        <input type="text" class="form-control" name="FeedingID" id="FeedingID">
      </div>

      <div class="form-group">
        <label for="t_ID">Tortoise ID:</label>
        <input type="text" class="form-control" name="t_ID" id="t_ID">
      </div>

      <div class="form-group">
        <label for="FoodType">Food Type:</label>
        <input type="text" class="form-control" name="FoodType" id="FoodType">
      </div>

      <div class="form-group">
        <label for="FeedingTime">Feeding Time:</label>
        <input type="time" class="form-control" name="FeedingTime" id="FeedingTime">
      </div>

      <div class="form-group">
        <label for="Quantity">Quantity:</label>
        <input type="text" class="form-control" name="Quantity" id="Quantity">
      </div>

      <div class="form-group">
        <label for="DietNotes">Diet Notes:</label>
        <input type="text" class="form-control" name="DietNotes" id="DietNotes">
      </div>

      <div class="form-group">
        <label for="Stock">Stock:</label>
        <input type="text" class="form-control" name="Stock" id="Stock">
      </div>


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </fieldset>

  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>