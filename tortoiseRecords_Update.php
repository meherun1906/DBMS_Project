<?php 

include "db.php";

if (isset($_POST['update'])) {

    $t_ID = $_POST['t_ID'];
    $species = $_POST['species'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $healthStatus = $_POST['healthStatus'];
    $history = $_POST['history'];

    $sql = "UPDATE `tortoiserecords` SET `species`='$species',`age`='$age',`gender`='$gender',`healthStatus`='$healthStatus', `history`='$history'  WHERE `t_ID`='$t_ID'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">';
        echo 'Record updated successfully.';
        echo '</div>';
        echo "<script>console.log('Record updated successfully.');</script>";
        header( "refresh:2; url=./tortoiseRecords.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
if (isset($_GET['t_ID'])) {

    $t_ID = $_GET['t_ID']; 

    $sql = "SELECT * FROM `tortoiserecords` WHERE `t_ID`='$t_ID'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $t_ID = $row['t_ID'];
            $species = $row['species'];
            $age = $row['age'];
            $gender = $row['gender'];
            $healthStatus = $row['healthStatus'];
            $history = $row['history'];

         } 

    ?>

    <html>
    <head>
        <title>Tortoise Records Update Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">

        <form action="" method="post">

          <fieldset>

            <input type="hidden" name="t_ID" value="<?php echo $t_ID; ?>">

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
      
      <input type="submit" class="btn btn-primary" value="Update" name="update">

          </fieldset>

        </form> 
    </div>

    </body>
    </html> 

    <?php

    } else{ 

        header('Location: tortoiseRecords.php');

    } 

}

?>