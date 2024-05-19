<?php
// Include koneksi ke database
include 'koneksi.php';

// Menerima data dari Flutter
$data = json_decode(file_get_contents("php://input"));

// Mendapatkan nilai dari data
$username = $data->username;
$password = md5($data->password);
$email = $data->email;
$nama = $data->nama;
$no_hp = $data->no_hp;

// Masukkan nilai ke dalam database
$query = "INSERT INTO akun_user (username, password, email, no_hp, nama) VALUES ('$username', '$password', '$email', '$no_hp','$nama')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $response['status'] = 'success';
    $response['message'] = 'User registered successfully';
} else {
    $response['status'] = 'error';
    $response['message'] = 'Failed to register user';
}

// Mengembalikan response ke Flutter
echo json_encode($response);
?>