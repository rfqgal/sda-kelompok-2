<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Form Input Data Siswa Baru</title>
    <h1>DATA SISWA BARU</h1>

</head>

<body>
    <form class="" action="proses.php?action=create" method="post">
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="nik">NIK:</label>
            <input type="text" name="nik" placeholder="nik harus 12 digit" />
        </p>
        <p>
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" placeholder="tempat lahir" />
        </p>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" />
        </p>
        <p>
            <label for="nisn">NISN:</label>
            <input type="text" name="nisn" placeholder="nisn 10 digit" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah asal" />
        </p>
        <p>
            <label for="telepon">No Telepon:</label>
            <input type="text" name="telepon" placeholder="nomor telepon aktif" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        
        <br>
        <p>
            <label for="nama_ibu">Nama Ibu:</label>
            <input type="text" name="nama_ibu" placeholder="nama ibu kandung" />
        </p>
        <p>
            <label for="tempat_lahir_ibu">Tempat Lahir:</label>
            <input type="text" name="tempat_lahir_ibu" placeholder="tempat lahir ibu" />
        </p>
        <p>
            <label for="tanggal_lahir_ibu">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir_ibu" />
        </p>
        <p>
            <label for="pendidikan_terakhir_ibu">Pendidikan Terakhir Ibu:</label>
            <select name="pendidikan_terakhir_ibu">
                <option>SD/Sederajat</option>
                <option>SMP/Sederajat</option>
                <option>SMA/Sederajat</option>
                <option>D1</option>
                <option>D2</option>
                <option>D3</option>
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
                <option>Tidak Sekolah</option>
            </select>
        </P>
        <p>
            <label for="pekerjaan_ibu">Pekerjaan:</label>
            <input type="text" name="pekerjaan_ibu" placeholder="pekerjaan ibu" />
        </p>
        <p>
            <label for="telepon_ibu">No Telepon:</label>
            <input type="text" name="telepon_ibu" placeholder="nomor telepon ibu" />
        </p>

        <br>
        <p>
            <label for="nama_ayah">Nama Ayah:</label>
            <input type="text" name="nama_ayah" placeholder="nama lengkap ayah" />
        </P>
        <p>
            <label for="tempat_lahir_ayah">Tempat Lahir:</label>
            <input type="text" name="tempat_lahir_ayah" placeholder="tempat lahir ayah" />
        </P>
        <p>
            <label for="tanggal_lahir_ayah">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir_ayah" />
        </P>
        <P>
            <label for="pendidikan_terakhir_ayah">Pendidikan Terakhir Ayah:</label>
            <select name="pendidikan_terakhir_ayah">
                <option>SD/Sederajat</option>
                <option>SMP/Sederajat</option>
                <option>SMA/Sederajat</option>
                <option>D1</option>
                <option>D2</option>
                <option>D3</option>
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
                <option>Tidak Sekolah</option>
            </select>
        </p>
        <p>
            <label for=pekerjaan_ayah>Pekerjaan:</label>
            <input type="text" name="pekerjaan_ayah" placeholder="pekerjaan ayah" />
        </P>
        <p>
            <label for="telepon_ayah">No Telepon:</label>
            <input type="text" name="telepon_ayah" placeholder="no telepon ayah" />
        </p>
        </p>

        <br>
        <button type="submit" name="submit" value=<?php echo date("h:i:sa"); ?> >Simpan</button>
        <a href="index.php">Batal</a>


    </form>
</body>

</html>