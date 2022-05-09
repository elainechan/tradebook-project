<?php
include "databaseconnect.php";
$sql = "SELECT id, name, type FROM $database.instrument order by type";
$result = $conn-> query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border = 1><tr><th>ID</th><th>Instrument Name</th><th>Type</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["type"]. "</td>";
    echo "<td>" . "<a href='deleteinstrument.php?id=" . $row["id"] . "'>Delete</a>" . "</td>";
    echo "<td>" . "<a href='editinstrument.php?id=" . $row["id"] . "'>Edit</a>" . "</td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<a href="addinstrument.html">Add Instrument</a>
