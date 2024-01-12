<?php

function luasLingkaran($jariJari)
{
    $luas = 3.14 * pow($jariJari, 2);
    return number_format($luas, 2);
}

function kelilingLingkaran($jariJari)
{
    $keliling = 2 * 3.14 * $jariJari;
    return number_format($keliling, 2);
}

function luasPersegi($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return number_format($luas, 2);
}

for ($angka = 1; $angka <= 100; $angka++) {
    $jariJari = $angka / 3;
    $panjang = $angka / 3;
    $lebar = $angka / 5;

    echo "Angka: " . number_format($angka, 2) . "\n";

    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo "Luas Persegi: " . luasPersegi($panjang, $lebar) . "\n";
    } elseif ($angka % 3 == 0) {
        echo "Luas Lingkaran: " . luasLingkaran($jariJari) . "\n";
    } elseif ($angka % 5 == 0) {
        echo "Keliling Lingkaran: " . kelilingLingkaran($jariJari) . "\n";
    }

    echo "\n";
}
