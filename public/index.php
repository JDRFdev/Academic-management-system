<?php
require_once __DIR__ . '/../app/model/DatabaseConnection.php';;

$d1 = DatabaseConnection::getInstance();
$pd1 = $d1->getConnection();
$d2 = DatabaseConnection::getInstance();
$pd2 = $d2->getConnection();
if($pd1===$pd2){
    echo "Andres es gey xd.\n";
}
?>