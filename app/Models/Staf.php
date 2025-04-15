<?php

namespace App\Models;

class Staf
{
    // Data staf statis (dummy)
    private static $dataStaf = [
        1 => ['id_staf' => 1, 'nama' => 'John Doe', 'departemen' => 'Bedah', 'nomor_telepon' => '08123456789', 'gaji' => 5000000],
        2 => ['id_staf' => 2, 'nama' => 'Jane Smith', 'departemen' => 'Anak', 'nomor_telepon' => '08198765432', 'gaji' => 4500000],
    ];

    // Mengambil semua data staf
    public static function semua()
    {
        return self::$dataStaf;
    }

    // Mengambil satu data staf berdasarkan ID
    public static function cari($id)
    {
        return self::$dataStaf[$id] ?? null;
    }
}