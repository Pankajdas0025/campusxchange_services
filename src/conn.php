

<?php
$conn = new mysqli ("localhost", "root","Pankaj#12345","campuxchange" , 3307);
if ($conn->connect_error)
{

    die("Connection failed: " . $conn->connect_error);
}
?>
