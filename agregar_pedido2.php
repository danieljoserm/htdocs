<?PHP

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$try="hola";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



header("Access-Control-Allow-Origin: *");

$result = mysqli_query($conn,"CALL agregar_pedido('peda')") or die("Query fail: " . mysqli_error());


if ($result) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["General"]);
    }

    /* free result set */
    $result->free();
}

//$sql = "SELECT * FROM prueba";
//$result = $conn->query($sql);


//$prueba = $result->fetch_assoc();
//echo json_encode($prueba);

  //while ($row = mysqli_fetch_array($result)){   
    //  echo $row[0] . " - " . + $row[1]; 
  //}
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