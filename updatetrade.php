<?PHP
include "databaseconnect.php";
$sql = "update trade set book_a = ?, book_b = ?, trader = ?, trade_type = ?, quantity = ?, instrument_id = ?, unit_price = ?, denomination_id = ? where id = ?";

$book_a = $_REQUEST["book-a"];
$book_b = $_REQUEST["book-b"];
$trader = $_REQUEST["trader"];
$trade_type = $_REQUEST["trade-type"];
$quantity = $_REQUEST["quantity"];
$instrument_id = $_REQUEST["instrument"];
$unit_price = $_REQUEST["price"];
$denomination_id = $_REQUEST["denomination"];
$id = $_REQUEST["id"];

$sentence = $conn->prepare($sql);
$sentence->bind_param("iiisiidii", $book_a, $book_b, $trader, $trade_type, $quantity, $instrument_id, $unit_price, $denomination_id, $id);

if ($sentence->execute() === TRUE) {
    echo "<script>window.location.href = 'trade.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
