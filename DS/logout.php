<?php
session_start();
setcookie("csrf_token", "", time()-3600, '/');\

setcookie("PHPSESSID", "", time()-3600, '/');
session_destroy();
header("Location: login.php");
?>