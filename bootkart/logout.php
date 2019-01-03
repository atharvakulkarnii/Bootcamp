<?php
session_start();
session_destroy();
echo "Successfully logged out!";
header("Refresh:2; url=index.php");

?>