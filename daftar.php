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
    <form class="" action="proses.php" method="post">
        <p>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
        <label for="nik">NIK:</label>
        <input type="text" name="nik" placeholder="nik harus 12 digit"/>
        </p>
        <p>
        <label for="temp_lahir">Tempat Lahir:</label>
        <input type="text" name="temp_lahir" placeholder="tempat lahir"/>
        </p>
        <p>
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir"/>
        </p>
        <p>
            <label for="nisn">NISN:</label>
            <input type="text" name="nisn" placeholder="nisn 10 digit"/>
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
            <label for="no_tlp">No Telepon:</label>
            <input type="text" name="no_tlp" placeholder="nomor telepon aktif"/>
        </p>
        <p>
            <label for="ibu">Nama Ibu:</label>
            <input type="text" name="ibu" placeholder="nama ibu kandung"/>
        </p>
        <p>
            <label for="tempat_ibu">Tempat Lahir:</label>
            <input type="text" name="tempat_ibu" placeholder="tempat lahir ibu"/>
        </p>
        <p>
            <label for="tgl_ibu">Tanggal Lahir:</label>
            <input type="date" name="tgl_ibu"/> 
        </p>
        <p>
            <label for="pend_ibu">Pendidikan Terakhir Ibu:</label>
            <select name="pend_ibu">
            <option>SD/Sederajat</option>
            <option>SMP/Sederajat</option>
            <option>SMA/Sederajat</option>
            <option>D1</option>
            <option>D2</option>
            <option>D3</option>
            <option>S1</option>
            <option>S2</option>
            <option>Tidak Sekolah</option>
</select>
        </P>
        <p>
            <label for="pekerj_ibu">Pekerjaan:</label>
            <input type="text" name="pekerj_ibu" placeholder="pekerjaan ibu"/>
        </p>
        <p>
            <label for="no_ibu">No Telepon:</label>
            <input type="text" name="no_ibu" placeholder="nomor telepon ibu"/>
        </p>
        <p>
            <label for="ayah">Nama Ayah:</label>
            <input type="text" name="ayah" placeholder="nama lengkap ayah"/>
        </P>
        <p>
            <label for="temp_ayah">Tempat Lahir:</label>
            <input type="text" name="temp_ayah" placeholder="tempat lahir ayah"/>
        </P>
        <p>
            <label for="tgl_ayah">Tanggal Lahir:</label>
            <input type="date" name="tgl_ayah"/>
        </P>
        <P>
            <label for="pend_ayah">Pendidikan Terakhir Ayah:</label>
            <select name="pend_ayah">
            <option>SD/Sederajat</option>
            <option>SMP/Sederajat</option>
            <option>SMA/Sederajat</option>
            <option>D1</option>
            <option>D2</option>
            <option>D3</option>
            <option>S1</option>
            <option>S2</option>
            <option>Tidak Sekolah</option>
</select>
        </p>
        <p>
            <label for=pekerj_ayah>Pekerjaan:</label>
            <input type="text" name="pekerj_ayah" placeholder="pekerjaan ayah"/>
        </P>
        <p>
            <label for="no_ayah">No Telepon:</label>
            <input type="text" name="no_ayah" placeholder="no telepon ayah"/>
        </p>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        
<br>
<button type="submit" name="submit" value=<?php echo date("h:i:sa");?> >Simpan</button> <a href="index.php">Batal</a>


    </form>
</body>

</html>