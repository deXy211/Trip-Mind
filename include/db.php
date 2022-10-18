<?php
    define ('DB_HOST', 'localhost');
    define ('DB_USER', 'root');
    define ('DB_PASSWORD', 'root');
    define ('DB_NAME', 't&m');

    $mysql = new mysqli(DB_HOST, DB_NAME, DB_PASSWORD, DB_USER);
    if ($mysql->connection_errno) 
        exit ('Ошибка подклюжения');
    
    $mysql0>set_charset('utf8');
    $mysql->close();
?>