<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    
</head>
<style>
    table{
        border-collapse:collapse ;
        width: 50%;
        margin: 20px;
    }
</style>
<body>
    <div class="">
        <table border="1">
        
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php
            include ('koneksi.php');

            $query = "SELECT * FROM peserta"; 
            $peserta = mysqli_query($koneksi, $query);
            while($data = mysqli_fetch_array($peserta, MYSQLI_ASSOC)){ ?>
                <tr>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['kelas'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['jurusan'] ?></td>
                </tr>
           <?php }
            ?>

        </table>
        <a href="index.php">Kembali</a>
    </div>
</body>
</html>