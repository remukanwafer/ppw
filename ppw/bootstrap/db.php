<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'db_ppw';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or diec('Gagal Terhubung ke Database');