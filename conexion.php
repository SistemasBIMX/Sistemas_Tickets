<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

date_default_timezone_set('America/Mexico_City');

$conn = pg_connect("
host=aws-1-us-west-2.pooler.supabase.com
port=5432
dbname=postgres
user=postgres.siwwnucxfjurzkezotlg
password=S1st3m4s_2026
sslmode=require
connect_timeout=15
");

if (!$conn) {
    die(pg_last_error());
}

pg_query($conn, "SET TIME ZONE 'America/Mexico_City'");
?>
