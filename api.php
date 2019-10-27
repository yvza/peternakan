<?php
// database
$host = 'localhost';
$db   = 'peternakan';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

if(@$_GET['get'] === 'all'){
    $query = "SELECT * 
    FROM detail d
    LEFT JOIN jenis j ON d.jenis_id = j.id";
    $ekse = $pdo->query($query)->fetchAll();
    echo json_encode($ekse);
}

if(@$_GET['action'] === 'update'){
    $query = "UPDATE detail SET harga_bibit = ? WHERE id = ?";
    $ekse = $pdo->prepare($query);
    $ekse->execute([
        $_POST['arBibit'],
        $_POST['arId']
    ]);
    echo 'ok';
}
?>