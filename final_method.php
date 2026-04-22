<?php
class kendaraan {
    final public function mesin() {
        echo "Masih Standar";
    }
}

class mobil extends kendaraan {
}

$bmw  = new mobil();
$bmw->mesin();
?>