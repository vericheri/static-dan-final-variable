<?php
final class database {
    public function connect() {
        echo "Koneksi Database";
    }
}
$db = new database();
$db->connect();
?>