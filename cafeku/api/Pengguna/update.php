<?php
include('connection.php');

//saat menggunakan POST
$data = json_decode(file_get_contents('php://input'), true);

$query="UPDATE siswa SET name =? , class =? , level =? , mtm = NOW() WHERE id =? ";

$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    $name=$data['name'];
    $class=$data['class'];
    $level=$data['level'];
    $id=$data['id'];

    mysqli_stmt_bind_param($stmt,'sssi',$name, $class, $level, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['STATUS'=>'BERHASIL', 'PESAN'=>'DATA PENGGUNA BERHASIL DIUPDATE', 'DATA'=>[]]);
    } else {
        echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'DATA PENGGUNA GAGAL DIUPDATE', 'DATA'=>[]]);
    }

} else {
    echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'MASALAH KONEKSI','DATA'=>[]]);
}

?>