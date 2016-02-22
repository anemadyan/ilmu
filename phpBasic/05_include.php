<?php
# Include fungsinya utk menyertakan dokumen php
include '01_variable.php';
echo 'Diatas tulisan ini adalah dokumen php: 01_variable.php<br>';

include 'file.php';
echo '<h1>File >file.php< memang tidak ada, sehingga akan tampil pesan warning</h1>';
