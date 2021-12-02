<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "it64309010015";
$password = "it123456";
$dbname = "it64309010015";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "hhhhhhhh";
$sql = "SELECT * FROM demo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "address:" . $row["address"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
