<!DOCTYPE html>
<html lang="en">

<head>
    <title>formulir Pendaftaran Ujian</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div  align-items: center class="kotak">
        <h1>Formulir Pendaftaran</h1>
        <form action="proses_input.php" method="post">
            <label for="nim">Nim</label>
            <input type="text" name="nim" class="form-input" maxlength="100" required>

            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-input" maxlength="100" required>
           
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" class="form-input" maxlength="100" required>
            
            <label for="email">Email</label>
            <input type="text" name="email" class="form-input" maxlength="100" required>
           
            <label for="jurusan">Jurusan</label>
            <div>
                <input type="checkbox" name="jurusan[]" value="Teknik Informatika"> Teknik Informatika
                <input type="checkbox" name="jurusan[]" value="Sistem Informasi"> Sistem Informasi
            </div>

            <button type="submit" id="btn-kirim">
                Daftar
            </button>
            <button type="reset" id="btn-reset">
                Reset
            </button>
        </form>
        <a href="daftarpeserta.php">Lihat Data</a>
    </div>

</body>

</html>