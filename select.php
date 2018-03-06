





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

header("Access-Control-Allow-Origin: *");

$sql = "SELECT * FROM prueba";
$result = $conn->query($sql);
$prueba = $result->fetch_assoc();
echo json_encode($prueba);

//if ($result->num_rows > 0) {
    // output data of each row
  //  while($row = $result->fetch_assoc()) {
    //    echo "General: " . $row["general"] ;
   // }
//} else {
 //   echo "0 results";
//}

mysqli_close($conn);
?>








