<?php
include "databaseconnect.php";
$sql = "SELECT id, name FROM $database.denomination";
$result = $conn-> query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border = 1><tr><th>ID</th><th>Denomination Name</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"]. "</td><td>" . $row["name"]. "</td>";
    echo "<td>" . "<a href='deletedenomination.php?id=" . $row["id"] . "'>Delete</a>" . "</td>";
    echo "<td>" . "<a href='editdenomination.php?id=" . $row["id"] . "'>Edit</a>" . "</td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<a href="adddenomination.html">Add Denomination</a>
