<?PHP
include "databaseconnect.php";
$sql = "insert into book_type (name) values (?)";

$name = $_REQUEST["name"];
$sentence = $conn->prepare($sql);
$sentence->bind_param("s", $name);
if ($sentence->execute() == TRUE) {
    echo "<script>window.location.href = 'booktype.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
