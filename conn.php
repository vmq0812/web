<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$host = 'localhost';
$user = 'root';
$pass = '123';
$db = 'typeorm-nestjs';
function ex($sql)
{
    mysqli_query($conn = mysqli_connect($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['pass'], $GLOBALS['db']), $sql);
}
function kq($sql)
{
    $data = [];
    $tt = mysqli_query($conn = mysqli_connect($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['pass'], $GLOBALS['db']), $sql);
    while ($row = mysqli_fetch_array($tt, 1)) {
        $data[] = $row;
    }
    return $data;
}