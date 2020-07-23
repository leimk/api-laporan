<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// require_once 'Db.php';
function laporan($sdate,$edate)
{
    $server = "localhost";
    $user = "leimk";
    $password = "Yindi!@#";
    $nama_database = "nagari";

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if( !$db ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
    // $db = new DB;
    $sql = "select * from data where created_at >= '$sdate' and created_at<= '$edate'";
    // print $sql;
    return mysqli_query($db,$sql);
    // return $db->select($sql) or die($db->error());    
}