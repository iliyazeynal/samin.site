<?php
$db=mysqli_connect('localhost','root','','??');
if ($db) {
    echo "connected!";
}
else {
    echo "disconnected!";
}
?>