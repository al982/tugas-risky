<?php
// Hari ini Bukhori sehat Wal Afiat,  maka Bukhori berangkat ke sekolah jika tidak ada kendala di keduanya Kondisi motor mogok.

$kondisi_bukhori = true; 
$kondisi_motor = false;

if ($kondisi_bukhori == true && $kondisi_motor == true) {
    echo "Berangkat ke sekolah";
} else {
    echo "Tidak jadi ke sekolah";
}