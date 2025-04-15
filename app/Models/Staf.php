<?php

namespace App\Models;

class Staf
{
    // Ambil semua data staf dari session, jika belum ada maka set dummy data awal
    public static function all()
    {
        $data = session('staf');
        if (!$data) {
            $data = [
                [
                    'id_staf' => 1,
                    'NAMA' => 'Budi',
                    'DEPARTEMEN' => 'IT',
                    'NOMOR_TELEPON' => '08123456789',
                    'GAJI' => 5000000,
                ],
                [
                    'id_staf' => 2,
                    'NAMA' => 'Siti',
                    'DEPARTEMEN' => 'HRD',
                    'NOMOR_TELEPON' => '08129876543',
                    'GAJI' => 4500000,
                ],
            ];
            session(['staf' => $data]);
        }

        return collect($data);
    }

    // Cari data staf berdasarkan ID
    public static function find($id)
    {
        return static::all()->firstWhere('id_staf', $id);
    }

    // Simpan data baru ke session
    public static function saveToSession($data)
    {
        $staf = static::all();
        $data['id_staf'] = $staf->max('id_staf') + 1;
        $staf->push($data);
        session(['staf' => $staf->all()]);
    }

    // Update data staf berdasarkan ID
    public static function updateSession($id, $newData)
    {
        $staf = static::all()->map(function ($item) use ($id, $newData) {
            if ($item['id_staf'] == $id) {
                return array_merge($item, $newData);
            }
            return $item;
        });
        session(['staf' => $staf->all()]);
    }

    // Hapus data staf berdasarkan ID
    public static function deleteFromSession($id)
    {
        $staf = static::all()->filter(fn($item) => $item['id_staf'] != $id);
        session(['staf' => $staf->values()->all()]);
    }
}
