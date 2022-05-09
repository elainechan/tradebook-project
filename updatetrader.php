<?PHP
include "databaseconnect.php";
$sql = "update trader set name = ? where id = ?";

$name = $_REQUEST["name"];
$id = $_REQUEST["id"];

$sentence = $conn->prepare($sql);
$sentence->bind_param("si", $name, $id);

if ($sentence->execute() === TRUE) {
    echo "<script>window.location.href = 'trader.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
