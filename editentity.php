<?PHP
include "databaseconnect.php";
$sql = "select * from entity where id = ?";

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
<form action="updateentity.php">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?php echo $row["name"]; ?>">
    <input type="hidden" id="id" name="id" value="<?php echo $row["id"]; ?>">
    <input type="submit" value="Submit">
</form>
