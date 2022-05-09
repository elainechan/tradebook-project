<?PHP
include "databaseconnect.php";
$sql = "select * from book where id = ?";

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
<form action="updatebook.php">
    <label for="name">Book Type</label>
    <input type="number" id="book-type" name="book-type" value="<?php echo $row["book_type_id"]; ?>">
    <label for="denomination">Denomination</label>
    <input type="number" id="denomination" name="denomination" value="<?php echo $row["denomination_id"]; ?>">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?php echo $row["name"]; ?>">
    <label for="trader">Trader</label>
    <input type="number" id="trader" name="trader" value="<?php echo $row["trader_id"]; ?>">
     <label for="entity">Entity</label>
    <input type="number" id="entity" name="entity" value="<?php echo $row["entity_id"]; ?>">
    <input type="hidden" id="id" name="id" value="<?php echo $row["id"]; ?>">
    <input type="submit" value="Submit">
</form>
