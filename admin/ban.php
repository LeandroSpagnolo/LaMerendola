<?php

include_once "../db/connect.php";

if(isset($_GET['email']) && !empty($_GET['email']))
{
    $email = $_GET['email'];
    $ban = (int)$_GET['ban'];
    $sql = $conn->query("UPDATE `credencialesUsuarios` SET Ban=".$ban." WHERE email='".$email."'") or die(mysqli_error());
    header('Location: ./admin.php');
}
else{
    echo"
    <html>
    <body>
    odio todo
    </body>
    </html>";
}
$conn->close();
?>
