<?PHP
include "databaseconnect.php";
$sql = "insert into book (book_type_id, denomination_id, name, trader_id, entity_id) values (?,?,?,?,?)";

$book_type_id = $_REQUEST["book-type"];
$denomination_id = $_REQUEST["denomination"];
$name = $_REQUEST["name"];
$trader_id = $_REQUEST["trader"];
$entity_id = $_REQUEST["entity"];

$sentence = $conn->prepare($sql);
$sentence->bind_param("iisii", $book_type_id, $denomination_id, $name, $trader_id, $entity_id);
if ($sentence->execute() == TRUE) {
    echo "<script>window.location.href = 'book.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
