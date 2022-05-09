<?PHP
include "databaseconnect.php";
$sql = "delete from instrument where id = ?";

$id = $_REQUEST["id"];
$sentence = $conn->prepare($sql);
$sentence->bind_param("i", $id);
if ($sentence->execute() === TRUE) {
    echo "<script>window.location.href = 'instrument.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
