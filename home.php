<?php 
include "./db.php";

$sql1 = "SELECT species, COUNT(*) as count FROM tortoiserecords GROUP BY species";
$result1 = $conn->query($sql1);

$species = [];
$species_count = [];

if ($result1->num_rows > 0) {
  while ($row = $result1->fetch_assoc()) {
    $species[] = $row['species'];
    $species_count[] = $row['count'];
  }
}


$sql2 = "SELECT healthStatus, COUNT(*) as count FROM tortoiserecords GROUP BY healthStatus";
$result2 = $conn->query($sql2);

$health_labels = [];
$health_count = [];

if ($result2->num_rows > 0) {
  while ($row = $result2->fetch_assoc()) {
    $health_labels[] = $row['healthStatus'];
    $health_count[] = $row['count'];
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tortoise Management System</title>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
.header-section {
  text-align: center;
  margin-top: 20px;
}

.header-section img {
  display: block;
  margin: 0 auto;
}
h1 {
  text-align: center;
}

#chartContainer {
  width: 50%;
  max-width: 500px;
  margin: 25px auto;
  padding: 15px;
}

</style>
</head>
</head>
<body>



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

<div class="header-section">
  <img src="logo.png" width="80">
  <h2>Not So Slow & Steady</h2>

  <p>Welcome to the Not So Slow & Steady Management System — where things move slowly, but the data moves fast.</p> 
  <p>Because even the slowest creatures deserve fast management.</p>

  <p>Thank You</p>
</div>

<div id="chartContainer">
  <h2>Tortoises by Species</h2>
  <canvas id="speciesChart"></canvas>
</div>

<div id="chartContainer">
  <h2>Health Status Distribution</h2>
  <canvas id="healthChart"></canvas>
</div>

<script>

var ctx1 = document.getElementById("speciesChart").getContext('2d');

new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: <?php echo json_encode($species); ?>,
    datasets: [{
      label: 'Number of Tortoises',
      data: <?php echo json_encode($species_count); ?>,
      backgroundColor: '#c5738b'
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});


var ctx2 = document.getElementById("healthChart").getContext('2d');

new Chart(ctx2, {
  type: 'pie',
  data: {
    labels: <?php echo json_encode($health_labels); ?>,
    datasets: [{
      label: 'Health Status',
      data: <?php echo json_encode($health_count); ?>,
      backgroundColor: ['#04AA6D','#FF6B6B','#4ECDC4','#FFA07A','#F7DC6F']
    }]
  },
  options: {
    responsive: true
  }
});

</script>

</body>
</html>