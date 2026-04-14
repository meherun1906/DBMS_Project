<?php 

include "db.php";

if (isset($_POST['update'])) {  
    $p_ID = $_POST['p_ID'];
    $maitingPairs = $_POST['maitingPairs'];
    $nestingDate = $_POST['nestingDate'];
    $eggCount = $_POST['eggCount'];
    $incubationDate = $_POST['incubationDate'];
    $successRate = $_POST['successRate'];
    $observations = $_POST['observations'];

    $sql = "UPDATE `breedingprograms` SET `maitingPairs`='$maitingPairs',`nestingDate`='$nestingDate',`eggCount`='$eggCount',`incubationDate`='$incubationDate',`successRate`='$successRate',`observations`='$observations'   WHERE `p_ID`='$p_ID'"; 

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
if (isset($_GET['p_ID'])) {   

    $p_ID = $_GET['p_ID']; 

    $sql = "SELECT * FROM `breedingprograms` WHERE `p_ID`='$p_ID'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $p_ID = $row['p_ID'];
            $maitingPairs = $row['maitingPairs'];
            $nestingDate = $row['nestingDate'];
            $eggCount = $row['eggCount'];
            $incubationDate = $row['incubationDate'];
            $successRate = $row['successRate'];
            $observations = $row['observations'];

         } 

    ?>

    <html>
    <head>
        <title>Breeding Programs Update Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">

        <form action="" method="post">

          <fieldset>   
            <input type="hidden" name="p_ID" value="<?php echo $p_ID; ?>">

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