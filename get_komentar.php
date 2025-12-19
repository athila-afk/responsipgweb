<?php
header('Content-Type: application/json');
include 'koneksi.php';

$sql = "SELECT * FROM tb_komentar ORDER BY created_at DESC LIMIT 10";
$result = mysqli_query($conn, $sql);

$data = array();
while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
mysqli_close($conn);
?>