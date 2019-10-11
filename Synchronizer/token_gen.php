

<?php
session_start();
$myfile = fopen("Tokens.txt", "w") or die("Unable to open file!"); //open file to store session Id and token
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$txt = $_SESSION['token'].",";
fwrite($myfile, $txt);
$txt1 = $_COOKIE['SesT']."\n";
fwrite($myfile, $txt1);
fclose($myfile);

echo $_SESSION['token']; //response given to the ajax call
?>





