<?php
$servername = "mysql-connection";
$username = "root";
$password = "P4S$W0RDI";
$database = "dbase";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
