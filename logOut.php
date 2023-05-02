<?php
session_start();

$_SESSION = array();

session_destroy();

header("refresh:1;url=homePage.php");

$message = "<p>You are logged out. Thank you!</p>";

echo "<div>$message</div>";

exit();

?>