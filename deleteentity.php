<?PHP
include "databaseconnect.php";
$sql = "delete from entity where id = ?";

$id = $_REQUEST["id"];
$sentence = $conn->prepare($sql);
$sentence->bind_param("i", $id);
if ($sentence->execute() === TRUE) {
    echo "<script>window.location.href = 'entity.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
