<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "dpw_web_sekolah";

$db = new mysqli($hostname, $username, $password, $database);

if ($db->connect_error) {
    die("koneksi gagal: " . $db->connect_error);
}
