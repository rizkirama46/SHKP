<?php

if( isset($_POST["limit"], $_POST["start"]) )
{
    $connect = mysqli_connect("localhost", "root", "", "donasi");
    $query = "SELECT * FROM users LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
    $result = mysqli_query($connect, $query);
    while( $row = mysqli_fetch_array($result) )
    {
        echo '
                <div class="card mt-2">                 
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="judul">'.$row["judul_program"].'</div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tanggal text-muted">'.$row["tgl_donasi"].'</div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="status col-6">
                                '.$row["status"].'
                            </div>
                            <div class="nominal col-6 text-right">
                                '.$row["nominal"].'
                            </div>
                        </div>
                    </div>                   
                </div>
        ';
    }

}



?>
