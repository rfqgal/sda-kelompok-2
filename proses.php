<?php
$koneksi = mysqli_connect("localhost","root","","db_siswa");

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['temp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$nisn = $_POST['nisn'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah_asal'];
$no_telepon = $_POST['no_tlp'];
$nama_ibu = $_POST['ibu'];
$tempat_lahir_ibu = $_POST['tempat_ibu'];
$tgl_lahir_ibu = $_POST['tgl_ibu'];
$pendidikan_terakhir_ibu = $_POST['pend_ibu'];
$pekerjaan_ibu = $_POST['pekerj_ibu'];
$no_telepon_ibu = $_POST['no_ibu'];
$tempat_lahir_ayah = $_POST['temp_ayah'];
$tanggal_lahir_ayah = $_POST['tgl_ayah'];
$pendidikan_terakhir_ayah = $_POST['pend_ayah'];
$nama_ayah = $_POST['ayah'];
$pekerjaan_ayah = $_POST['pekerj_ayah'];
$no_telepon_ayah = $_POST['no_ayah'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO data_siswa VALUES(
    '$nama','$nik','$tempat_lahir','$tgl_lahir','$nisn','$jenis_kelamin',
    '$agama','$sekolah','$no_telepon','$nama_ibu','$tempat_lahir_ibu','$tgl_lahir_ibu',
    '$pendidikan_terakhir_ibu','$pekerjaan_ibu','$no_telepon_ibu','$nama_ayah',
    '$tempat_lahir_ayah','$tanggal_lahir_ayah','$pendidikan_terakhir_ayah','$pekerjaan_ayah',
    '$no_telepon_ayah','$alamat'
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