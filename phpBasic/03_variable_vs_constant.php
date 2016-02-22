<?php
# Nilai didalam variable dapat diubah sesuai kebutuhan.
$buah = 'pisang';
echo 'Buah ' . $buah . '<br>';

$buah = 'apple';
echo 'Sekarang buah' . $buah . '<br><br>';


# Nilai didalam constant tidak dapat diubah, sifatnya permanen.
const buah = 'jeruk';
echo 'Isi konstanta adalah ' . buah . '<br>';

const buah = 'mangga'; //akan menghasilkan ERROR, nilai konstanta tidak boleh diubah
echo 'Isi konstanta sekarang adalah ' . buah . '<br>';
