<?php
        $host = "localhost";
        $user = "root";
        $pass ="";
        $db  = "db_datamhs";

        $koneksi = mysql_connect($host,$user,$pass);
        $select_db = mysql_select_db($db);
        
    ?>