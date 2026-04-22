<?php
class pengunjung {
    public static $jumlah = 0;
    public function __construct() {
        self::$jumlah;
    }
}

$p1 = new pengunjung();
$p2 = new pengunjung();
$p3 = new pengunjung();
$p4 = new pengunjung();
$p5 = new pengunjung();

echo "Jumlah Pengunjung: " . pengunjung::$jumlah;

?>