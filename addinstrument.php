<?PHP
include "databaseconnect.php";
$sql = "insert into instrument (name, type) values (?, ?)";

$name = $_REQUEST["name"];
$type = $_REQUEST["type"];
$sentence = $conn->prepare($sql);
$sentence->bind_param("ss", $name, $type);
if ($sentence->execute() == TRUE) {
    echo "<script>window.location.href = 'instrument.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
