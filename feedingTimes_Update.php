<?php 

include "db.php";

if (isset($_POST['update'])) {  
    $f_ID = $_POST['f_ID'];
    $t_ID = $_POST['t_ID'];
    $foodType = $_POST['foodType'];
    $feedingTime = $_POST['feedingTime'];
    $quantity = $_POST['quantity'];
    $dietNotes = $_POST['dietNotes'];
    $stock = $_POST['stock'];

    $sql = "UPDATE `feedingtimes` SET `t_ID`='$t_ID',`foodType`='$foodType',`feedingTime`='$feedingTime',`quantity`='$quantity',`dietNotes`='$dietNotes',`stock`='$stock' WHERE `f_ID`='$f_ID'"; 

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
if (isset($_GET['f_ID'])) {   

    $f_ID = $_GET['f_ID']; 

    $sql = "SELECT * FROM `feedingtimes` WHERE `f_ID`='$f_ID'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $f_ID = $row['f_ID'];
            $t_ID = $row['t_ID'];
            $foodType = $row['foodType'];
            $feedingTime = $row['feedingTime'];
            $quantity = $row['quantity'];
            $dietNotes = $row['dietNotes'];
            $stock = $row['stock'];
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
            <input type="hidden" name="f_ID" value="<?php echo $f_ID; ?>">

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