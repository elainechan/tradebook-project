<?PHP
include "databaseconnect.php";
$sql = "update holding_position set book_id = ?, instrument_id = ?, quantity = ? where id = ?";

$book_id = $_REQUEST["book"];
$instrument_id = $_REQUEST["instrument"];
$quantity = $_REQUEST["quantity"];
$id = $_REQUEST["id"];

$sentence = $conn->prepare($sql);
$sentence->bind_param("iiii", $book_id, $instrument_id, $quantity, $id);

if ($sentence->execute() === TRUE) {
    echo "<script>window.location.href = 'position.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
