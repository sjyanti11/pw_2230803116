<?php
function hitungLuasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

// Contoh penggunaan dengan panjang 10 CM dan lebar 6.5 CM
$panjang = 10;
$lebar = 6.5;
$luas = hitungLuasPersegiPanjang($panjang, $lebar);

echo "Luas persegi panjang dengan panjang $panjang CM dan lebar $lebar CM adalah $luas CM^2.";
?>