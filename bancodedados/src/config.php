<?php

$host = 'http://localhost/conteudos/crud-php-mysql-procedual/';

$db_name ='crud';
$db_host = 'localhost';
$db_user = 'root';
$db_pass ='';

try{
    $conn = msqli_connect($db_host, $db_user, $db_pass , $db_name);
}catch(\Throwble $th){
    throw $th;
}
?>