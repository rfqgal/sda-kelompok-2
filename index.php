<!DOCTYPE html>
<html>
<head>
    <title>DATABASE SISWA | SMK KELOMPOK 2</title>
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

    </body>
</html>