<?php
include "databaseconnect.php";
$sql = "SELECT id, name, region_id FROM $database.entity";
$result = $conn-> query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border = 1><tr><th>ID</th><th>Entity Name</th><th>Region</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["region_id"]. "</td>";
    echo "<td>" . "<a href='deleteentity.php?id=" . $row["id"] . "'>Delete</a>" . "</td>";
    echo "<td>" . "<a href='editentity.php?id=" . $row["id"] . "'>Edit</a>" . "</td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<a href="addentity.html">Add Entity</a>
