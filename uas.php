<?php
// Array data siswa
$siswa = array(
    array('nama' => 'dafriza', 'usia' => 17),
    array('nama' => 'malikal', 'usia' => 16),
    array('nama' => 'mahesa', 'usia' => 16),
    array('nama' => 'stevanus', 'usia' => 15)
);

// Perulangan untuk menampilkan data siswa
foreach ($siswa as $data) {
    $nama = $data['nama'];
    $usia = $data['usia'];

    // Percabangan berdasarkan usia siswa
    if ($usia > 16) {
        echo "$nama sudah cukup dewasa.";
    } elseif ($usia > 14) {
        echo "$nama sedang mengalami masa remaja.";
    } else {
        echo "$nama masih dalam masa kanak-kanak.";
    }
    echo "<br>";
}
?>
