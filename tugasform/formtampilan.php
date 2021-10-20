<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/ds.css">
</head>
<body>
<?php
    $nama = $_POST['nama'];
    $jenisbarang = $_POST['jenisbarang'];
    $hargabarang = $_POST['hargabarang'];
    $tombol = $_POST['tombol'];  
?>
<div class="login-page">
  <div class="form">
    <center><h3>FORM PENJUALAN ALAT TANGKAP</h3></center>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nama Pembeli</th>
                                <th scope="col">Jenis Barang</th>
                                <th scope="col">Harga Barang</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <tr>
                                <td><?php echo "Nama : ".$nama."<br>";?></td>
                                <td><?php echo "JenisBarang : ".$jenisbarang."<br>";?></td>
                                <td><?php echo "HargaBarang : ".$hargabarang."<br>";?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>