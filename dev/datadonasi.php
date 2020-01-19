<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "donasi");


function tampil($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

$result = tampil('SELECT * FROM users');

        foreach($result as $data){
            echo '["';
            echo date("d-m-Y",strtotime($data['tgl_donasi'])).'","';
            echo $data['judul_program'].'","';
            echo $data['nominal'].'","';
            echo $data['status'].'",""';
            echo '],';
        }  
?>