<?php




include "./db.php";




$sql = " SELECT Program_ID, MaitingPairs, NestingDate, EggCount, IncubationDate, SuccessRate, Observations FROM breedingProgram";




$result = $conn->query($sql);




?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>




body {
  font-family: Arial;
  margin: 0;
}




ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #cf5555;
}




ul li {
  float: left;
}




ul li a {
  display: block;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
}




ul li a:hover {
  background-color: #a94444;
}




.container {
  width: 80%;
  margin: 30px auto;
}




.top-bar {
  display: flex;
  justify-content: flex-end;
  margin-bottom: 10px;
}




table {
  width: 100%;
  border-collapse: collapse;
}




th, td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: center;
}




th {
  background-color: #cf5555;
  color: white;
}




tr:hover {
  background-color: #f2f2f2;
}




h1 {
  text-align: center;
}




.button {
  background-color: #cf5555;
  border: none;
  color: white;
  padding: 15px 25px;
  text-decoration: none;
  font-size: 14px;
  cursor: pointer;
  border-radius: 5px;
}




.btn {
  background-color: #cf5555;
  color: white;
  border: none;
  padding: 5px 10px;
  margin-right: 5px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 12px;
}
* {
  box-sizing: border-box;
}




#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}




#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}




#myTable tr {
  border-bottom: 1px solid #ddd;
}




#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}




</style>
</head>




<body>
<table>
    <td style="border: 0px solid #ddd;"><img src="logo.png" width="180" height="123"></td>
    <td style="border: 0px solid #ddd;"><h1>Not So Slow & Steady</h1></td>
</table>




<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="tortoiseRecords.php">Tortoise Records</a></li>
  <li><a href="enclosure.php">Enclosures Details</a></li>
  <li><a href="breedingProgram.php">Breeding Programs</a></li>
  <li><a href="FeedingTimes.php">Log Feeding Times</a></li>
  <li><a href="healthAssessment.php">Health Assessment</a></li>
  <li><a href="environmentalConditions.php">Environmental Conditions</a></li>
  <li><a href="assignTask.php">Assign Task</a></li>
</ul>

<h2>Breeding Programs</h2>
<table style="border: 0px solid #ddd;">
    <td style="border: 0px solid #ddd;"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search ID" title="Type ID"></td>
    <td style="border: 0px solid #ddd;"><a href="breedingProgram_Create.php" class="button">Add</a></td>
</table>



<table id="myTable">
  <tr class="header">
    <th>Program ID</th>
    <th>Maiting Pairs</th>
    <th>Nesting Date</th>
    <th>Egg Count</th>
    <th>Incubation Date</th>
    <th>Success Rate</th>
    <th>Observations</th>
    <th>Action</th>
  </tr>



  <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $row['Program_ID']; ?></td>
    <td><?php echo $row['MaitingPairs']; ?></td>
    <td><?php echo $row['NestingDate']; ?></td>
    <td><?php echo $row['EggCount']; ?></td>
    <td><?php echo $row['IncubationDate']; ?></td>
    <td><?php echo $row['SuccessRate']; ?></td>
    <td><?php echo $row['Observations']; ?></td>
    <td>
      <a href="breedingPrograms_Update.php?Program_ID=<?php echo $row['Program_ID']; ?>" class="button">Edit</a>
      <a href="breedingPrograms_Delete.php?Program_ID=<?php echo $row['Program_ID']; ?>" class="button" style="background-color: #cf5555;">Delete</a>
    </td>
  </tr>
  <?php
      }
    }
    $conn->close();
  ?>
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }      
  }
}
</script>




</body>
</html>
