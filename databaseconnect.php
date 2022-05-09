<?php
$servername = "localhost";
$database = "u728248645_trading_system";
$username = "u728248645_devadmin";
$password = "Enigma1945";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$conn->select_db("u728248645_trading_system");
// echo "Connected successfully";
// $sql = "SELECT id, name FROM $database.region";
// //die($sql);
// $result = $conn-> query($sql);
// // var_dump($result);
// if ($result->num_rows > 0) {
//   // output data of each row
//   echo "<table border = 1>";
//   while($row = $result->fetch_assoc()) {
//     echo "<tr>";
//     echo "<td>" . $row["id"]. "</td><td>" . $row["name"]. "</td>" . " " . "<br>";
//     echo "</tr>";
//     var_dump($row);
//   }
// } else {
//   echo "0 results";
// }

// mysqli_close($conn);
?>
