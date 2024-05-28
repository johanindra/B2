<?php
// Impor file koneksi.php
require_once 'koneksi.php';

// Periksa apakah ada parameter userId dalam permintaan POST
if ( isset( $_POST[ 'userId' ] ) ) {
    $userId = $_POST[ 'userId' ];

    // Periksa apakah ada file gambar yang dikirim
    if ( isset( $_FILES[ 'image' ] ) ) {
        $file = $_FILES[ 'image' ];

        // Periksa apakah tidak ada error pada file yang dikirim
        if ( $file[ 'error' ] === UPLOAD_ERR_OK ) {
            // Tentukan direktori penyimpanan
            $uploadDir = '../foto_profil/';
            // Buat nama unik untuk file gambar
            $fileName = uniqid() . '_' . basename( $file[ 'name' ] );
            // Gabungkan direktori penyimpanan dengan nama file
            $uploadPath = $uploadDir . $fileName;

            // Siapkan query untuk mengupdate foto_ktp
            $sql = "UPDATE akun_user 
                    SET foto_profil = ? 
                    WHERE username = ?";

            // Gunakan prepared statement untuk menghindari SQL Injection
            $stmt = $koneksi->prepare( $sql );
            $stmt->bind_param( 'ss', $fileName, $userId );

            // Jalankan query
            if ( $stmt->execute() ) {
                // Pindahkan file gambar yang diunggah ke direktori penyimpanan
                if ( move_uploaded_file( $file[ 'tmp_name' ], $uploadPath ) ) {
                    // Kirim respons berhasil
                    echo json_encode( array( 'status' => 'success' ) );
                } else {
                    // Jika gagal memindahkan file, kirimkan respons dengan status kode 500 ( Internal Server Error )
                    http_response_code( 500 );
                    echo json_encode( array( 'error' => 'Gagal menyimpan file gambar' ) );
                }
            } else {
                // Jika query gagal dieksekusi, kirimkan respons dengan status kode 500 ( Internal Server Error )
                http_response_code( 500 );
                echo json_encode( array( 'error' => 'Gagal menyimpan data gambar ke database: ' . $stmt->error ) );
            }

            // Tutup statement
            $stmt->close();
        } else {
            // Jika terjadi kesalahan pada file yang diunggah, kirimkan respons dengan status kode 400 ( Bad Request )
            http_response_code( 400 );
            echo json_encode( array( 'error' => 'Terjadi kesalahan pada file yang diunggah' ) );
        }
    } else {
        // Jika tidak ada file gambar yang dikirim, kirimkan respons dengan status kode 400 ( Bad Request )
        http_response_code( 400 );
        echo json_encode( array( 'error' => 'Tidak ada file gambar yang dikirim' ) );
    }
} else {
    // Jika parameter userId tidak ada dalam permintaan, kirimkan respons dengan status kode 400 ( Bad Request )
    http_response_code( 400 );
    echo json_encode( array( 'error' => 'Parameter userId tidak ditemukan' ) );
}

// Tutup koneksi ke database ( optional, karena koneksi akan ditutup secara otomatis saat skrip selesai dieksekusi )
$koneksi->close();
?>