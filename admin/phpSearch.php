<?php

$search = $_POST['search'];
include_once "connect.php";
$sql = "select * from credencialesUsuarios where nombre like '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row['nombre']."  ".$row['Ban']."  ".$row["cuentaVerificada"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>