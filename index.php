<?php  session_start(); 
unset($_SESSION['id']) ?>
<html>
<head>	
</head>

<body >
<?php 
include_once("database.php");
getConnect();
$sql = "SELECT * FROM player";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["pid"]. " - Name: " . $row["pname"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
hello!
</body>
</html>
