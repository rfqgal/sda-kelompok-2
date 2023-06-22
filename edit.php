<?php
$connect = mysqli_connect("localhost","root","","db_siswa");

$query = "SELECT * FROM db_siswa.data_siswa
    WHERE id = " . $_GET['id'];
$sql = mysqli_query($connect, $query);

$siswa = mysqli_fetch_assoc($sql);

mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Form Edit Data Siswa</title>
</head>

<body>
    <h1>PERUBAHAN DATA SISWA</h1>

    <p>
        <a href="index.php">Home</a> > <span style="font-weight: bolder; text-decoration: underline;">
            Edit
        </span>
    </p>
    <br>

    <form class="" action="proses.php?action=update" method="post">
        <p hidden>
            <input type="text" name="id" placeholder="id siswa di database" value="<?= $siswa['id'] ?>" required />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?= $siswa['nama'] ?>" required />
        </p>
        <p>
            <label for="nik">NIK:</label>
            <input type="text" name="nik" placeholder="nik harus 12 digit" value="<?= $siswa['nik'] ?>" required />
        </p>
        <p>
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" placeholder="tempat lahir" value="<?= $siswa['tempat_lahir'] ?>" required />
        </p>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir'] ?>" required />
        </p>
        <p>
            <label for="nisn">NISN:</label>
            <input type="text" name="nisn" placeholder="nisn 10 digit" value="<?= $siswa['nisn'] ?>" required />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"
                <?php if ($siswa['jenis_kelamin'] == 'laki-laki'): ?>
                    checked
                <?php endif; ?>> Laki-laki
            </label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"
                <?php if ($siswa['jenis_kelamin'] == 'perempuan'): ?>
                    checked
                <?php endif; ?>> Perempuan
            </label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama" required>
                <option <?php if ($siswa['agama'] == 'Islam'): ?>
                    selected
                <?php endif; ?>>Islam</option>
                <option <?php if ($siswa['agama'] == 'Kristen'): ?>
                    selected
                <?php endif; ?>>Kristen</option>
                <option <?php if ($siswa['agama'] == 'Hindu'): ?>
                    selected
                <?php endif; ?>>Hindu</option>
                <option <?php if ($siswa['agama'] == 'Buddha'): ?>
                    selected
                <?php endif; ?>>Buddha</option>
                <option <?php if ($siswa['agama'] == 'Atheis'): ?>
                    selected
                <?php endif; ?>>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah">Sekolah Asal: </label>
            <input type="text" name="sekolah" placeholder="nama sekolah asal" value="<?= $siswa['sekolah'] ?>" required />
        </p>
        <p>
            <label for="telepon">No Telepon:</label>
            <input type="text" name="telepon" placeholder="nomor telepon aktif" value="<?= $siswa['telepon'] ?>" required />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?= $siswa['alamat'] ?></textarea>
        </p>

        <br>
        <p>
            <label for="nama_ibu">Nama Ibu:</label>
            <input type="text" name="nama_ibu" placeholder="nama ibu kandung" value="<?= $siswa['nama_ibu'] ?>" required />
        </p>
        <p>
            <label for="tempat_lahir_ibu">Tempat Lahir:</label>
            <input type="text" name="tempat_lahir_ibu" placeholder="tempat lahir ibu" value="<?= $siswa['tempat_lahir_ibu'] ?>" required />
        </p>
        <p>
            <label for="tanggal_lahir_ibu">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir_ibu" value="<?= $siswa['tanggal_lahir_ibu'] ?>" required />
        </p>
        <p>
            <label for="pendidikan_terakhir_ibu">Pendidikan Terakhir Ibu:</label>
            <select name="pendidikan_terakhir_ibu" required>
                <option <?php if ($siswa['pendidikan_terakhir_ibu'] == 'SD/Sederajat'): ?>
                    selected
                <?php endif; ?>>SD/Sederajat</option>
                <option <?php if ($siswa['pendidikan_terakhir_ibu'] == 'SMP/Sederajat'): ?>
                    selected
                <?php endif; ?>>SMP/Sederajat</option>
                <option <?php if ($siswa['pendidikan_terakhir_ibu'] == 'SMA/Sederajat'): ?>
                    selected
                <?php endif; ?>>SMA/Sederajat</option>
                <option <?php if ($siswa['pendidikan_terakhir_ibu'] == 'D1'): ?>
                    selected
                <?php endif; ?>>D1</option>
                <option <?php if ($siswa['pendidikan_terakhir_ibu'] == 'D2'): ?>
                    selected
                <?php endif; ?>>D2</option>
                <option <?php if ($siswa['pendidikan_terakhir_ibu'] == 'D3'): ?>
                    selected
                <?php endif; ?>>D3</option>
                <option <?php if ($siswa['pendidikan_terakhir_ibu'] == 'S1'): ?>
                    selected
                <?php endif; ?>>S1</option>
                <option <?php if ($siswa['pendidikan_terakhir_ibu'] == 'S2'): ?>
                    selected
                <?php endif; ?>>S2</option>
                <option <?php if ($siswa['pendidikan_terakhir_ibu'] == 'S3'): ?>
                    selected
                <?php endif; ?>>S3</option>
                <option <?php if ($siswa['pendidikan_terakhir_ibu'] == 'Tidak Sekolah'): ?>
                    selected
                <?php endif; ?>>Tidak Sekolah</option>
            </select>
        </p>
        <p>
            <label for="pekerjaan_ibu">Pekerjaan:</label>
            <input type="text" name="pekerjaan_ibu" placeholder="pekerjaan ibu" value="<?= $siswa['pekerjaan_ibu'] ?>" required />
        </p>
        <p>
            <label for="telepon_ibu">No Telepon:</label>
            <input type="text" name="telepon_ibu" placeholder="nomor telepon ibu" value="<?= $siswa['telepon_ibu'] ?>" required />
        </p>

        <br>
        <p>
            <label for="nama_ayah">Nama Ayah:</label>
            <input type="text" name="nama_ayah" placeholder="nama lengkap ayah" value="<?= $siswa['nama_ayah'] ?>" required />
        </p>
        <p>
            <label for="tempat_lahir_ayah">Tempat Lahir:</label>
            <input type="text" name="tempat_lahir_ayah" placeholder="tempat lahir ayah" value="<?= $siswa['tempat_lahir_ayah'] ?>" required />
        </p>
        <p>
            <label for="tanggal_lahir_ayah">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir_ayah" value="<?= $siswa['tanggal_lahir_ayah'] ?>" required />
        </p>
        <p>
            <label for="pendidikan_terakhir_ayah">Pendidikan Terakhir Ayah:</label>
            <select name="pendidikan_terakhir_ayah" required>
                <option <?php if ($siswa['pendidikan_terakhir_ayah'] == 'SD/Sederajat'): ?>
                    selected
                <?php endif; ?>>SD/Sederajat</option>
                <option <?php if ($siswa['pendidikan_terakhir_ayah'] == 'SMP/Sederajat'): ?>
                    selected
                <?php endif; ?>>SMP/Sederajat</option>
                <option <?php if ($siswa['pendidikan_terakhir_ayah'] == 'SMA/Sederajat'): ?>
                    selected
                <?php endif; ?>>SMA/Sederajat</option>
                <option <?php if ($siswa['pendidikan_terakhir_ayah'] == 'D1'): ?>
                    selected
                <?php endif; ?>>D1</option>
                <option <?php if ($siswa['pendidikan_terakhir_ayah'] == 'D2'): ?>
                    selected
                <?php endif; ?>>D2</option>
                <option <?php if ($siswa['pendidikan_terakhir_ayah'] == 'D3'): ?>
                    selected
                <?php endif; ?>>D3</option>
                <option <?php if ($siswa['pendidikan_terakhir_ayah'] == 'S1'): ?>
                    selected
                <?php endif; ?>>S1</option>
                <option <?php if ($siswa['pendidikan_terakhir_ayah'] == 'S2'): ?>
                    selected
                <?php endif; ?>>S2</option>
                <option <?php if ($siswa['pendidikan_terakhir_ayah'] == 'S3'): ?>
                    selected
                <?php endif; ?>>S3</option>
                <option <?php if ($siswa['pendidikan_terakhir_ayah'] == 'Tidak Sekolah'): ?>
                    selected
                <?php endif; ?>>Tidak Sekolah</option>
            </select>
        </p>
        <p>
            <label for="pekerjaan_ayah">Pekerjaan:</label>
            <input type="text" name="pekerjaan_ayah" placeholder="pekerjaan ayah" value="<?= $siswa['pekerjaan_ayah'] ?>" required />
        </p>
        <p>
            <label for="telepon_ayah">No Telepon:</label>
            <input type="text" name="telepon_ayah" placeholder="no telepon ayah" value="<?= $siswa['telepon_ayah'] ?>" required />
        </p>

        <br>
        <button type="submit" name="submit" value=<?php echo date("h:i:sa"); ?> >Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>