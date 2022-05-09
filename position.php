<?php
include "databaseconnect.php";
$sql = "SELECT id, book_id, instrument_id, quantity FROM $database.holding_position";
$result = $conn-> query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border = 1><tr><th>ID</th><th>Book</th> <th>Instrument</th> <th>Quantity</th> </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"]. "</td><td>" . $row["book_id"]. "</td><td>" . $row["instrument_id"]. "</td><td>" . $row["quantity"]. "</td>";
    echo "<td>" . "<a href='deleteposition.php?id=" . $row["id"] . "'>Delete</a>" . "</td>";
    echo "<td>" . "<a href='editposition.php?id=" . $row["id"] . "'>Edit</a>" . "</td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<a href="addposition.html">Add Position</a>
