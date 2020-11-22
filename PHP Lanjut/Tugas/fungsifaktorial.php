<?php
function faktorial($angka) {

    if ($angka<2) {
        return 1;
    } else {
        return ($angka * faktorial($angka-1));
    }
}

echo "Hasil Faktorial : ";
echo faktorial (5);
?>