<?php 
$github_url = "https://github.com/37543/fdr";

$is_local = in_array($_SERVER['SERVER_NAME'] ?? '', ['localhost', '127.0.0.1']);

if ($is_local) {
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'work_shop';
    $db_port = 3306;
} else {
    $db_host = 'sql312.infinityfree.com';
    $db_user = 'if0_42582231';
    $db_pass = 'sk3qNPsfSyJ';
    $db_name = 'if0_42582231_work_shop';
    $db_port = 3306;
}

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);

if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

$conn->set_charset('utf8mb4');
date_default_timezone_set('Asia/Bangkok');
?>