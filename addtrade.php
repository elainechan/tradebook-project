<?PHP
include "databaseconnect.php";
$sql = "insert into trade (book_a, book_b, trader, trade_type, quantity, instrument_id, unit_price, denomination_id) values (?,?,?,?,?,?,?,?)";

$book_a = $_REQUEST["book-a"];
$book_b = $_REQUEST["book-b"];
$trader = $_REQUEST["trader"];
$trade_type = $_REQUEST["trade-type"];
$quantity = $_REQUEST["quantity"];
$instrument_id = $_REQUEST["instrument"];
$unit_price = $_REQUEST["price"];
$denomination_id = $_REQUEST["denomination"];

$sentence = $conn->prepare($sql);
$sentence->bind_param("iiisiidi", $book_a, $book_b, $trader, $trade_type, $quantity, $instrument_id, $unit_price, $denomination_id);
if ($sentence->execute() == TRUE) {
    echo "<script>window.location.href = 'trade.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
