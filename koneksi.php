<?php
    $koneksi = mysqli_connect("localhost","root","","favnime");
        if (mysqli_connect_errno()){
            echo "Connection Failed". mysqli_connect_error();
        }
?>  