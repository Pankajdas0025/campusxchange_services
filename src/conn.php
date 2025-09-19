
<?php


$conn = new mysqli("localhost", "root", "Pankaj#12345", "campusxchange");  //  for localhost
if ($conn->connect_error)
{

    die("Connection failed: " . $conn->connect_error);
}
?>
