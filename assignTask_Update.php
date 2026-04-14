<?php 

include "db.php";

if (isset($_POST['update'])) {  

    $TaskID = $_POST['TaskID'];
    $StaffID = $_POST['StaffID'];
    $Task = $_POST['Task'];
    $AssignedDate = $_POST['AssignedDate'];
    $TaskStatus = $_POST['TaskStatus'];

    $sql = "UPDATE `task` SET `StaffID`='$StaffID',`Task`='$Task',`AssignedDate`='$AssignedDate',`TaskStatus`='$TaskStatus'  WHERE `TaskID`='$TaskID'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">';
        echo 'Record updated successfully.';
        echo '</div>';
        echo "<script>console.log('Record updated successfully.');</script>";
        header( "refresh:2; url=./assignTask.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
if (isset($_GET['TaskID'])) {   

    $TaskID = $_GET['TaskID']; 

    $sql = "SELECT * FROM `task` WHERE `TaskID`='$TaskID'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $TaskID = $row['TaskID'];
            $StaffID = $row['StaffID'];
            $Task = $row['Task'];
            $AssignedDate = $row['AssignedDate'];
            $TaskStatus = $row['TaskStatus'];

         } 

    ?>

    <html>
    <head>
        <title>Assign Tasks Update Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">

        <form action="" method="post">

          <fieldset>   

            <input type="hidden" name="TaskID" value="<?php echo $TaskID; ?>">

        <div class="form-group">
        <label for="StaffID">StaffID:</label>
        <input type="text" class="form-control" name="StaffID" id="StaffID">
      </div>

      <div class="form-group">
        <label for="Task">Task:</label>
        <input type="text" class="form-control" name="Task" id="Task">
      </div>

      <div class="form-group">
        <label for="AssignedDate">Assigned Date:</label>
        <input type="date" class="form-control" name="AssignedDate" id="AssignedDate">
      </div>

      <div class="form-group">
        <label for="TaskStatus">Task Status:</label>
        <input type="text" class="form-control" name="TaskStatus" id="TaskStatus">
      </div>

      
      <input type="submit" class="btn btn-primary" value="Update" name="update">

          </fieldset>

        </form> 
    </div>

    </body>
    </html> 

    <?php

    } else{ 

        header('Location: assignTask.php');

    } 

}

?>