<?php
include 'db.php';
$pdo = new Database();

try {
    $pdo->insertUser("banaan", "banaan");
    echo "succes";
} 
catch (PDOException $e) {
    echo "error instert .".$e->getMessage();
}
?>