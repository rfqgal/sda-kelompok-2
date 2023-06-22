<?php
$koneksi = mysqli_connect("localhost","root","","db_siswa");

switch ($_GET['action']) {
    case 'create':
        $id = NULL; // akan auto increment

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

        $query = "INSERT INTO db_siswa.data_siswa 
            (nama, nik, tempat_lahir, tanggal_lahir, nisn,
            jenis_kelamin, agama, sekolah, telepon, alamat,
            
            nama_ibu, tempat_lahir_ibu, tanggal_lahir_ibu,
            pendidikan_terakhir_ibu, pekerjaan_ibu, telepon_ibu,
            
            nama_ayah, tempat_lahir_ayah, tanggal_lahir_ayah,
            pendidikan_terakhir_ayah, pekerjaan_ayah, telepon_ayah)

            VALUES(
                '$nama','$nik','$tempat_lahir','$tanggal_lahir','$nisn',
                '$jenis_kelamin','$agama','$sekolah_asal','$telepon','$alamat',

                '$nama_ibu','$tempat_lahir_ibu','$tanggal_lahir_ibu',
                '$pendidikan_terakhir_ibu','$pekerjaan_ibu','$telepon_ibu',
                
                '$nama_ayah','$tempat_lahir_ayah','$tanggal_lahir_ayah',
                '$pendidikan_terakhir_ayah','$pekerjaan_ayah','$telepon_ayah'
            )";

        $create = mysqli_query($koneksi, $query);

        if ($create) {
            // kalau berhasil alihkan ke halaman index.php dengan status=created
            header('Location: index.php?status=created');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=not-created
            header('Location: index.php?status=not-created');
        }
        break;
    case 'update':
        $id = $_POST['id'];

        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $nisn = $_POST['nisn'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah'];
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

        $query = "UPDATE db_siswa.data_siswa
            SET nama='$nama', nik='$nik', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', nisn='$nisn', 
                jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah='$sekolah', telepon='$telepon', alamat='$alamat', 
                
                nama_ibu='$nama_ibu', tempat_lahir_ibu='$tempat_lahir_ibu', tanggal_lahir_ibu='$tanggal_lahir_ibu', 
                pendidikan_terakhir_ibu='$pendidikan_terakhir_ibu', pekerjaan_ibu='$pekerjaan_ibu', telepon_ibu='$telepon_ibu', 
                
                nama_ayah='$nama_ayah', tempat_lahir_ayah='$tempat_lahir_ayah', tanggal_lahir_ayah='$tanggal_lahir_ayah', 
                pendidikan_terakhir_ayah='$pendidikan_terakhir_ayah', pekerjaan_ayah='$pekerjaan_ayah', telepon_ayah='$telepon_ayah'
            WHERE id = $id";

        $update = mysqli_query($koneksi, $query);

        if ($update) {
            // kalau berhasil alihkan ke halaman index.php dengan status=updated
            header('Location: index.php?status=updated');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=not-updated
            header('Location: index.php?status=not-updated');
        }
        break;
    case 'delete':
        $id = $_GET['id'];

        $query = "DELETE FROM db_siswa.data_siswa WHERE id=$id";
        
        $delete = mysqli_query($koneksi, $query);
        
        if ($delete) {
            // kalau berhasil alihkan ke halaman index.php dengan status=deleted
            header('Location: index.php?status=deleted');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=not-deleted
            header('Location: index.php?status=not-deleted');
        }
        break;
}

mysqli_close($koneksi);
?>