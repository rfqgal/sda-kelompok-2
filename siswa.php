<?php
$connect = mysqli_connect("localhost","root","","db_siswa");

$query = "SELECT * FROM db_siswa.data_siswa
    WHERE id = " . $_GET['id'];
$sql = mysqli_query($connect, $query);

$siswa = mysqli_fetch_assoc($sql);

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISWA | SMK KELOMPOK 2</title>
    <style>
        .table-horizontal-divider {
            padding: 0 4px 0 16px;
        }
        .table-vertical-divider {
            font-size: larger;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <?php if (is_null($siswa)): ?>
        <h2>Siswa tidak ditemukan</h2>
    <?php else: ?>
        <h1>SMK KELOMPOK 2</h1>

        <p>
            <a href="index.php">Home</a> > <span style="font-weight: bolder; text-decoration: underline;">
                Siswa
            </span>
        </p>
        <br>

        <table>
            <tr id="data-siswa">
                <td class="table-vertical-divider" style="padding-bottom: 8px;">
                    Data Siswa
                </td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">nama</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['nama'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: uppercase">nik</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['nik'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: uppercase">nisn</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['nisn'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: none">Tempat dan Tanggal Lahir</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= 
                    $siswa['tempat_lahir'] . ', ' . date_format(new DateTime($siswa['tanggal_lahir']), 'd-m-Y')
                ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">jenis kelamin</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['jenis_kelamin'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">agama</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['agama'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">sekolah</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['sekolah'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">no telepon</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['telepon'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">alamat</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['alamat'] ?></td>
            </tr>
            <tr id="data-ibu">
                <td class="table-vertical-divider" style="padding: 24px 0 8px 0;">
                    Data Ibu
                </td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">nama ibu</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['nama_ibu'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: none">Tempat dan Tanggal Lahir</td>
                <td class="table-horizontal-divider">:</td>
                <td><?=
                    $siswa['tempat_lahir_ibu'] . ', ' . date_format(new DateTime($siswa['tanggal_lahir_ibu']), 'd-m-Y')
                ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">pendidikan terakhir</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['pendidikan_terakhir_ibu'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">pekerjaan</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['pekerjaan_ibu'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">no telepon</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['telepon_ibu'] ?></td>
            </tr>
            <tr id="data-ayah">
                <td class="table-vertical-divider" style="padding: 24px 0 8px 0;">
                    Data Ayah
                </td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">nama ayah</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['nama_ayah'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: none">Tempat dan Tanggal Lahir</td>
                <td class="table-horizontal-divider">:</td>
                <td><?=
                    $siswa['tempat_lahir_ayah'] . ', ' . date_format(new DateTime($siswa['tanggal_lahir_ayah']), 'd-m-Y')
                ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">pendidikan terakhir</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['pendidikan_terakhir_ayah'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">pekerjaan</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['pekerjaan_ayah'] ?></td>
            </tr>
            <tr>
                <td style="text-transform: capitalize">no telepon</td>
                <td class="table-horizontal-divider">:</td>
                <td><?= $siswa['telepon_ayah'] ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>