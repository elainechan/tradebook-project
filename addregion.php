<?PHP
include "databaseconnect.php";
$sql = "insert into region (name) values (?)";

$name = $_REQUEST["name"];
$sentence = $conn->prepare($sql);
$sentence->bind_param("s", $name);
if ($sentence->execute() == TRUE) {
    echo "<script>window.location.href = 'region.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
