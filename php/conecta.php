<?php 
try {
  $conn = new PDO('mysql:host=127.0.0.1:3310;dbname=jtec', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn -> exec("SET CHARACTER SET utf8");
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>