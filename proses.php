<?php
$koneksi = mysqli_connect("localhost","root","","db_siswa");

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nisn = $_POST['nisn'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

$nama_ibu = $_POST['nama_ibu'];
$tempat_lahir_ibu = $_POST['tempat_lahir_ibu'];
$tanggal_lahir_ibu = $_POST['tanggal_lahir_ibu'];
$pendidikan_terakhir_ibu = $_POST['pendidikan_terakhir_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$telepon_ibu = $_POST['telepon_ibu'];

$nama_ayah = $_POST['nama_ayah'];
$tempat_lahir_ayah = $_POST['tempat_lahir_ayah'];
$tanggal_lahir_ayah = $_POST['tanggal_lahir_ayah'];
$pendidikan_terakhir_ayah = $_POST['pendidikan_terakhir_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$telepon_ayah = $_POST['telepon_ayah'];

$query = "INSERT INTO data_siswa VALUES(
    '$nama','$nik','$tempat_lahir','$tanggal_lahir','$nisn',
    '$jenis_kelamin','$agama','$sekolah_asal','$telepon','$alamat',

    '$nama_ibu','$tempat_lahir_ibu','$tanggal_lahir_ibu',
    '$pendidikan_terakhir_ibu','$pekerjaan_ibu','$telepon_ibu',
    
    '$nama_ayah','$tempat_lahir_ayah','$tanggal_lahir_ayah',
    '$pendidikan_terakhir_ayah','$pekerjaan_ayah','$telepon_ayah'
)";

mysqli_query($koneksi, $query);
if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: index.php?status=sukses');
} else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: index.php?status=gagal');
}

?>