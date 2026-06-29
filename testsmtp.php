<?php
$fp = fsockopen("ssl://smtp.gmail.com", 465, $errno, $errstr, 15);

if (!$fp) {
    echo "ERROR: $errno - $errstr";
} else {
    echo "CONECTADO";
    fclose($fp);
}