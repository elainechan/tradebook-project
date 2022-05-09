<?PHP
include "databaseconnect.php";
$sql = "select * from trade where id = ?";

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
<form action="updatetrade.php">
    <label for="book-a">Book A</label>
    <input type="number" id="book-a" name="book-a" value="<?php echo $row["book_a"]; ?>">
    <label for="book-b">Book B</label>
    <input type="number" id="book-b" name="book-b" value="<?php echo $row["book_b"]; ?>">
    <label for="trader">Trader</label>
    <input type="number" id="trader" name="trader" value="<?php echo $row["trader"]; ?>">
    <label for="trade-type">Trade Type</label>
    <input type="text" id="trade-type" name="trade-type" value="<?php echo $row["trade_type"]; ?>">
    <label for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" value="<?php echo $row["quantity"]; ?>">
    <label for="instrument">Instrument</label>
    <input type="number" id="instrument" name="instrument" value="<?php echo $row["instrument_id"]; ?>">
    <label for="price">Unit Price</label>
    <input type="number" id="price" name="price" step="0.01" min="0" value="<?php echo $row["unit_price"]; ?>">
    <label for="denomination">Denomination</label>
    <input type="number" id="denomination" name="denomination" value="<?php echo $row["denomination_id"]; ?>">
    <input type="hidden" id="id" name="id" value="<?php echo $row["id"]; ?>">
    <input type="submit" value="Submit">
</form>
