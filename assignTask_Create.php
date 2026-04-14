<?php 
include "./db.php";

  if (isset($_POST['submit'])){           

    $TaskID = $_POST['TaskID'];

    $StaffID = $_POST['StaffID'];

    $Task = $_POST['Task'];

    $AssignedDate = $_POST['AssignedDate'];

    $TaskStatus = $_POST['TaskStatus'];

    $sql = "INSERT INTO `task`(`TaskID`, `StaffID`, `Task`, `AssignedDate`, `TaskStatus`) VALUES ('$TaskID','$StaffID','$Task','$AssignedDate','$TaskStatus')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo '<div class="alert alert-success" role="alert">New record created successfully!</div>';
      echo "<script>console.log('New record created successfully!');</script>";
      header( "refresh:2; url=./assignTask.php" ); 

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close();
   }
?>
<!DOCTYPE html>

<html>

<head>
  <title>Assign Task</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<div class="container">
  <h2>Assign Task Form</h2>

  <form action="" method="POST">

    <fieldset>                      

      <div class="form-group">
        <label for="TaskID">Task ID :</label>
        <input type="text" class="form-control" name="TaskID" id="TaskID">
      </div>

      <div class="form-group">
        <label for="StaffID">Staff ID:</label>
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


      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </fieldset>

  </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>