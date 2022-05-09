<?PHP
include "databaseconnect.php";
$sql = "update instrument set name = ?, type = ? where id = ?";

$name = $_REQUEST["name"];
$type = $_REQUEST["type"];
$id = $_REQUEST["id"];

$sentence = $conn->prepare($sql);
$sentence->bind_param("ssi", $name, $type, $id);

if ($sentence->execute() === TRUE) {
    echo "<script>window.location.href = 'instrument.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
