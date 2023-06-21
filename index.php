<?php
$connect = mysqli_connect("localhost","root","","db_siswa");

$query = "SELECT id, nama, nik, nisn, sekolah, alamat
    FROM db_siswa.data_siswa;";
$rows = mysqli_query($connect, $query);

mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA SISWA | SMK KELOMPOK 2</title>
</head>

<body>
    <header>
        <h3>DATA SISWA</h3>
        <h1>SMK KELOMPOK 2</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Input siswa berhasil!";
                    } else {
                        echo "Input siswa gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
        <ul>
            <li><a href="daftar.php">Input Baru</a></li>
        </ul>
    </nav>

    <div style="padding: 32px 128px">
        <table style="width: 100%;" border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>NISN</th>
                    <th>Sekolah Asal</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['nik'] ?></td>
                    <td><?= $row['nisn'] ?></td>
                    <td><?= $row['sekolah'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td style="text-align: center;">
                        <a href=<?= "siswa/" . $row['id'] ?>>Lihat</a>
                        <a href=<?= "siswa/edit/" . $row['id'] ?>>Ubah</a>
                        <a href=<?= "siswa/hapus/" . $row['id'] ?>>Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    </body>
</html>