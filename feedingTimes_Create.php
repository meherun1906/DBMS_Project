<?php 
include "./db.php";

  if (isset($_POST['submit'])){     

    $f_ID = $_POST['f_ID'];

    $t_ID = $_POST['t_ID'];

    $foodType = $_POST['foodType'];

    $feedingTime = $_POST['feedingTime'];

    $quantity = $_POST['quantity'];

    $dietNotes = $_POST['dietNotes']; 
    
    $stock = $_POST['stock']; 

    $sql = "INSERT INTO `feedingtimes`(`f_ID`, `t_ID`, `foodType`, `feedingTime`, `quantity`,`dietNotes`, `stock`) VALUES ('$f_ID','$t_ID','$foodType','$feedingTime','$quantity', '$dietNotes','$stock')";
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
  <title>Feeding Times</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<div class="container">
  <h2>Log Feeding Times Form</h2>

  <form action="" method="POST">
    <fieldset>                   
      <div class="form-group">
        <label for="f_ID">Feeding ID :</label>
        <input type="text" class="form-control" name="f_ID" id="f_ID">
      </div>

      <div class="form-group">
        <label for="t_ID">Tortoise ID:</label>
        <input type="text" class="form-control" name="t_ID" id="t_ID">
      </div>

      <div class="form-group">
        <label for="foodType">Food Type:</label>
        <input type="text" class="form-control" name="foodType" id="foodType">
      </div>

      <div class="form-group">
        <label for="feedingTime">Feeding Time:</label>
        <input type="time" class="form-control" name="feedingTime" id="feedingTime">
      </div>

      <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="text" class="form-control" name="quantity" id="quantity">
      </div>

      <div class="form-group">
        <label for="dietNotes">Diet Notes:</label>
        <input type="text" class="form-control" name="dietNotes" id="dietNotes">
      </div>

      <div class="form-group">
        <label for="stock">Stock:</label>
        <input type="text" class="form-control" name="stock" id="stock">
      </div>


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </fieldset>

  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>