<?php
    include 'konek.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Data Mahasiswa</title>
</head>
<body>
    <!--untuk memanggil navbar-->
    <?php require_once('navbar.php'); ?>

    <hr><h1><div align="center">DATA MAHASISWA</h1><hr>
    <div class="container">
         
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th><div align="center">NPM</th>
                    <th>Nama</th>
                    <th><div align="center">Jenis Kelamin</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                </tr>
            </thead>


    <?php
        $npm = $_GET['npm'];
        $sql = "select * from tb_mhs where npm='$npm'";
        $query = mysql_query($sql);            
        $no = 0;                
        while($data = mysql_fetch_array($query)){
        $no++;
            echo " <tbody>
            <tr height='32px'>
                <td align='center'>".$data['npm']."</td>
                <td >".$data['nama']."</td>
                <td align='center'>".$data['jenis']."</td>
                <td >".$data['prodi']."</td>
                <td >".$data['alamat']."</td>
                <td >".$data['email']."</td>
                <td >".$data['telp']."</td>
                <td></td>                        
            </tr></tbody>
            ";
        }

    ?>
</body>
</html>