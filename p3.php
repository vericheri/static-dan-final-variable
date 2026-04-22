<?php
class Produk {
    public static $jumlahProduk = 0;
    public $nama, $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        self::$jumlahProduk++;
    }
}

class Transaksi {
    final public function prosesTransaksi($produk) {
        echo "<tr>
                <td>{$produk->nama}</td>
                <td>Rp " . number_format($produk->harga, 0, ',', '.') . "</td>
                <td style='color: green;'>Berhasil</td>
              </tr>";
    }
}

$listProduk = [
    new Produk("Laptop Asus", 8500000),
    new Produk("Mouse Wireless", 250000),
    new Produk("Monitor LG", 1800000)
];

echo "<h3>Ringkasan Gudang</h3>";
echo "Total jenis produk yang terdaftar: " . Produk::$jumlahProduk . " item.<br><br>";

echo "<h3>Simulasi Transaksi Penjualan</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0'>
        <tr bgcolor='#eee'>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Status</th>
        </tr>";

$kasir = new Transaksi();
foreach ($listProduk as $p) {
    $kasir->prosesTransaksi($p);
}

echo "</table>";
?>