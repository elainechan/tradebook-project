<?PHP
include "databaseconnect.php";
$sql = "update book_type set name = ? where id = ?";

$name = $_REQUEST["name"];
$id = $_REQUEST["id"];

$sentence = $conn->prepare($sql);
$sentence->bind_param("si", $name, $id);

if ($sentence->execute() === TRUE) {
    echo "<script>window.location.href = 'booktype.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
