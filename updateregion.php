<?PHP
include "databaseconnect.php";
$sql = "update region set name = ? where id = ?";

$name = $_REQUEST["name"];
$id = $_REQUEST["id"];

$sentence = $conn->prepare($sql);
$sentence->bind_param("si", $name, $id);

if ($sentence->execute() === TRUE) {
    echo "<script>window.location.href = 'region.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
