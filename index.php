<?php
$connect = mysqli_connect("localhost", "root", "", "db_siswa");

$query = "SELECT id, nama, nik, nisn, sekolah, alamat FROM data_siswa";
$result = mysqli_query($connect, $query);

mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA SISWA | SMK KELOMPOK 2</title>
    <link rel="stylesheet" href="css_file/index.css">
</head>

<body>
<?php if (isset($_GET['status'])): ?>
    <script>
        const params = new URLSearchParams(window.location.search);
        const status = params.get('status');

        switch (status) {
            case 'created':
                alert('Input siswa berhasil!');
                break;
            case 'not-created':
                alert('Input siswa gagal!');
                break;
            case 'updated':
                alert('Edit siswa berhasil!');
                break;
            case 'not-updated':
                alert('Edit siswa gagal!');
                break;
            case 'deleted':
                alert('Hapus siswa berhasil!');
                break;
            case 'not-deleted':
                alert('Hapus siswa gagal!');
                break;
            default:
                break;
        }
        window.location.search = '';
    </script>
<?php endif; ?>

<header>
    <h1>SMK KELOMPOK 2</h1>
</header>

<h4>Menu</h4>
<nav>
    <ul>
        <li><a class="btn btn-primary" href="daftar.php">Tambah Data Baru</a></li>
    </ul>
</nav>

<div style="padding: 32px 128px">
    <?php if (mysqli_num_rows($result) > 0): ?>
        <table class="table">
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
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['nik'] ?></td>
                    <td><?= $row['nisn'] ?></td>
                    <td><?= $row['sekolah'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td class="center">
                        <a class="btn btn-info" href="siswa.php?id=<?= $row['id'] ?>">Lihat</a>
                        <a class="btn btn-warning" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                        <a class="btn btn-danger" onclick="deleteSiswa(<?= $row['id'] ?>, '<?= $row['nama'] ?>')" href="#">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p style="text-align: center;">Data tidak ditemukan</p>
    <?php endif; ?>
</div>

<script>
    function deleteSiswa(id, name) {
        const confirmDelete = confirm(`Apakah Anda yakin ingin menghapus siswa ${name}?`);

        if (confirmDelete) {
            window.location = `proses.php?action=delete&id=${id}`;
        }
    }
</script>
</body>
</html>
