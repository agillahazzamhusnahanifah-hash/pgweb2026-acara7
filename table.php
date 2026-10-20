<?php
    $kecamatan = array ("Moyudan", "Minggir", "Sayegan", "Godean", "Gamping");
    $luas = array (27.62,27.27, 26.63, 26.84, 29.25);
    $jumlah_penduduk = array (31497, 29886, 47129, 72028, 108675);

    echo '<table border = 1>';
    echo '<th>No</th>';
    echo '<th>Kecamatan</th>';
    echo '<th>Luas</th>';
    echo '<th>Jumlah Penduduk</th>';
    echo '</tr>';

    // Menggunakan count() untuk mengetahui jumlah data pada array
    $jumlah_data = count($kecamatan);

    // Iterasi menggunakan for loop
    for ($i = 0; $i < $jumlah_data; $i++) {
        echo '<tr>';
        echo '<td>' . ($i + 1) . '</td>';
        echo '<td>' . $kecamatan[$i] . '</td>';
        echo '<td>' . $luas[$i] . '</td>';
        echo '<td>' . number_format($jumlah_penduduk[$i], 0, ',', '.') . '</td>'; // number_format agar format ribuan rapi (misal: 31.497)
        echo '</tr>';
    }

    echo '</table>';
?>