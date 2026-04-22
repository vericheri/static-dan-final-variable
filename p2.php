<?php
class matematika { 
    public static function hitung($a, $b, $op) {
        if ($op == 'tambah') return $a + $b;
        if ($op == 'kurang') return $a - $b;
        if ($op == 'kali')   return $a * $b;
        if ($op == 'bagi')   return $a / $b;
        if ($op == 'luas')   return $a * $a;
        return "";
    }
}

$hasil = isset($_POST['h']) ? matematika::hitung($_POST['a'], $_POST['b'], $_POST['op']) : "";
?>

<form method="POST">
    <input type="number" name="a" placeholder="" required>
    <select name="op">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">x</option>
        <option value="bagi">/</option>
        <option value="luas">Luas (sisi x sisi)</option>
    </select>
    <input type="number" name="b" placeholder="">
    <button type="submit" name="h">=</button>
</form>

<?php if ($hasil !== "") echo "<h3>Hasil: $hasil</h3>"; ?>