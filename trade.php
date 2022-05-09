<?php
include "databaseconnect.php";
$sql = "SELECT id, book_a, book_b, trader, trade_type, quantity, instrument_id, unit_price, denomination_id FROM $database.trade";
$result = $conn-> query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border = 1><tr><th>ID</th><th>Book A</th><th>Book B</th> <th>Trader</th> <th>Trade Type</th> <th>Quantity</th> <th>Instrument</th> <th>Unit Price</th> <th>Denomination</th> </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"]. "</td><td>" . $row["book_a"]. "</td><td>" . $row["book_b"]."</td><td>" . $row["trader"]."</td><td>" . $row["trade_type"]."</td><td>" . $row["quantity"]."</td><td>" . $row["instrument_id"]."</td><td>" . $row["unit_price"]."</td><td>" . $row["denomination_id"]. "</td>";
    echo "<td>" . "<a href='deletetrade.php?id=" . $row["id"] . "'>Delete</a>" . "</td>";
    echo "<td>" . "<a href='edittrade.php?id=" . $row["id"] . "'>Edit</a>" . "</td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<a href="addtrade.html">Add Trade</a>
