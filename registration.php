<?php
$str = "<h1>name</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo "<h3>Welcome $_POST[$newstr]!</h3>";
?>