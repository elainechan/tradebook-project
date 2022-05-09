<?PHP
include "databaseconnect.php";
$sql = "select * from holding_position where id = ?";

$id = $_REQUEST["id"];
$sentence = $conn->prepare($sql);
$sentence->bind_param("i", $id);
$sentence->execute();
$result = $sentence->get_result();
//var_dump($result);
if ($result->num_rows>0) {
    $row = $result->fetch_assoc();
}
?>
<form action="updateposition.php">
    <label for="book">Book</label>
    <input type="number" id="book" name="book" value="<?php echo $row["book_id"]; ?>">
    <label for="instrument">Instrument</label>
    <input type="number" id="instrument" name="instrument" value="<?php echo $row["instrument_id"]; ?>">
    <label for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" value="<?php echo $row["quantity"]; ?>">
    <input type="hidden" id="id" name="id" value="<?php echo $row["id"]; ?>">
    <input type="submit" value="Submit">
</form>
