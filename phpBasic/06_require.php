<?php
# Require fungsinya sama persis dengan Include, bedanya: jika fila tidak ada, proses PHP dihentikan
require '01_variable.php';
echo 'file diatas adalah 01_variable.php<br>';

require 'file.php'; // file.php memang tidak ada
echo '<h1>Tulisan ini tidak dibaca php karena file.php tidak ditemukan / tidak ada.</h1>';

// NOTE: coba file.php ganti dengan file yang ada, pasti tulisan / kalimat terakhir akan dibaca.
