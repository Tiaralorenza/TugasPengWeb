<?php

//masukan lokasi dan nama file database
$dsn = 'mysql:dbname=epiz_23199619_tugas;host=sql311.epizy.com';
$user = 'epiz_23199619';
$password = 'zXZJFCBFzvyYpv';


//tes menghubungkan ke database
try {
    $dbh = new PDO($dsn, $user, $password);
    
    //melihat dan menghadle pesan eror lalu di lempar ke PDO_Exeption
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //kita bolehkan beberapa query berjalan dalam satu waktu
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
    //echo 'Alhamdulillah Lancar lancar ';
    }
    
    catch (PDOException $e) {
    echo 'Koneksi gagal: ' . $e->getMessage();
    }

?>
