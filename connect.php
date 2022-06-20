<?php
include "credenciales.inc";

// Create connection
$conn = new mysqli($HOST, $USER, $PASS, $BASE);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}