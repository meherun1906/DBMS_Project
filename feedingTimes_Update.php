<?php 

include "db.php";

if (isset($_POST['update'])) {

    $FeedingID = $_POST['FeedingID'];
    $t_ID = $_POST['t_ID'];
    $FoodType = $_POST['FoodType'];
    $FeedingTime = $_POST['FeedingTime'];
    $Quantity = $_POST['Quantity'];
    $DietNotes = $_POST['DietNotes'];
    $Stock = $_POST['Stock'];

    $sql = "UPDATE `logfeedingtimes` SET `t_ID`='$t_ID',`FoodType`='$FoodType',`FeedingTime`='$FeedingTime',`Quantity`='$Quantity',`DietNotes`='$DietNotes', `Stock`='$Stock'  WHERE `FeedingID`='$FeedingID'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">';
        echo 'Record updated successfully.';
        echo '</div>';
        echo "<script>console.log('Record updated successfully.');</script>";
        header( "refresh:2; url=./feedingTimes.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
if (isset($_GET['FeedingID'])) {

    $FeedingID = $_GET['FeedingID']; 

    $sql = "SELECT * FROM `logfeedingtimes` WHERE `FeedingID`='$FeedingID'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {         

        while ($row = $result->fetch_assoc()) {
            $FeedingID = $row['FeedingID'];
            $t_ID = $row['t_ID'];
            $FoodType = $row['FoodType'];
            $FeedingTime = $row['FeedingTime'];
            $Quantity = $row['Quantity'];
            $DietNotes = $row['DietNotes'];
            $Stock = $row['Stock'];
         } 

    ?>

    <html>
    <head>
        <title>Feeding Times Update Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">

        <form action="" method="post">

          <fieldset>

            <legend>Tortoise Records:</legend>

            <input type="hidden" name="t_ID" value="<?php echo $t_ID; ?>">

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
      
      <input type="submit" class="btn btn-primary" value="Update" name="update">

          </fieldset>

        </form> 
    </div>

    </body>
    </html> 

    <?php

    } else{ 

        header('Location: feedingTimes.php');

    } 

}

?>