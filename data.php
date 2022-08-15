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
</head>
<body>
    <?php require_once('navbar.php'); ?>
    <!--tabel-->
    <div class="container">
        <br><h2><div align="center">Data Mahasiswa</h2><br>          
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th><div align="center">NPM</th>
                    <th>Nama</th>
                    <th><div align="center">QR Code</th>
                </tr>
            </thead>
            <!--untuk memanggil database-->
                <?php
                    $sql = "select * from tb_mhs";
                    $query = mysql_query($sql);
                    $no = 0;                
                    while($data = mysql_fetch_array($query)){
                    $no++;
                    $kdid = $data['npm'];
                    $jk = $data['jenis'];
                    
                    $view="http://localhost:8080/qrCode/view.php?npm=$kdid";
                    $qrCode="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=$view&choe=UTF-8";
                    if($jk)
                    //untuk menampilkan data dari database
                    echo " <tbody>
                    <tr height='32px'>
                    <td align='center'><a href='view.php?npm=$data[npm]'>".$data['npm']."</a></td>
                        <td >".$data['nama']."</td>
                        <td align='center'><a href=''></a> </td> 
                        <td><img src='$qrCode'></td>                       
                    </tr></tbody>
                    ";
                    }
                ?> 
        </table>
    </div>
</body>
</html>