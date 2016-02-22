<?php
# If fungsinya untuk menentukan apakah nilai dari kondisi benar
$buah = 'anggur'; // silahkan edit nilai variablenya jadi pisang :)

if ($buah == 'pisang') {
  echo 'Buah ini warna kuning, buah favoritku, yaitu pisang.<br>';
} else {
  echo 'Ini bukan pisang, karena warnanya ungu.<br>';
}

/* Baris ke-5, dobel sama dengan: fungsinya untuk mencocokkan apakah variable buah di baris 3 isinya pisang?
 * Jika BENAR, baris 6 dijalankan,
 * Jika SALAH, baris 8 dijalankan.
 */


# GUNAKAN LOGIKAMU, KALAU BELUM PAHAM... ULANGI TERUS SAMPAI BENAR-BENAR PAHAM!

# Silahkan lanjut ke pernyataan bawah jika memang sudah paham sama atas.



$Buah = 'mangga'; // silahkan edit nilainya sesukamu :)

if ($Buah == 'pisang') {
  echo 'Ini buah kesukaanku, ' . $Buah;
} elseif ($Buah == 'anggur') {
  echo 'Ini bukan buah kesukaanku, tapi aku masih doyan makan ' . $Buah . ' ini.';
} else {
  echo 'Aku tak tahu ini buah apa, aku ogah makan ini.';
}
