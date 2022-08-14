<?php
session_start();

unset($_SESSION['admin']);
echo '<meta http-equiv="refresh" content="1; url=/index.php">';

?>