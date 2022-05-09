<?PHP
include "databaseconnect.php";
$sql = "insert into entity (name, region_id) values (?, ?)";

$name = $_REQUEST["name"];
$region = $_REQUEST["region"];
$sentence = $conn->prepare($sql);
$sentence->bind_param("si", $name, $region);
if ($sentence->execute() == TRUE) {
    echo "<script>window.location.href = 'entity.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
