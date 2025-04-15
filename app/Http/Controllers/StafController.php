<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staf;

class StafController extends Controller
{
   // Menampilkan daftar seluruh staf
   public function index()
   {
       $daftarStaf = Staf::semua();
       return view('staf.index', compact('daftarStaf'));
   }

   // Menampilkan form tambah staf baru
   public function create()
   {
       return view('staf.create');
   }

   // Menyimpan data staf baru (simulasi, tidak tersimpan permanen)
   public function store(Request $request)
   {
       // Logika penyimpanan tidak dilakukan karena data statis
       return redirect()->route('staf.index')->with('success', 'Data staf berhasil ditambahkan (simulasi).');
   }

   // Menampilkan detail staf
   public function show($id)
   {
       $staf = Staf::cari($id);
       return view('staf.show', compact('staf'));
   }

   // Menampilkan form edit staf
   public function edit($id)
   {
       $staf = Staf::cari($id);
       return view('staf.edit', compact('staf'));
   }

   // Menyimpan perubahan data staf (simulasi)
   public function update(Request $request, $id)
   {
       return redirect()->route('staf.index')->with('success', 'Data staf berhasil diperbarui (simulasi).');
   }

   // Menghapus data staf (simulasi)
   public function destroy($id)
   {
       return redirect()->route('staf.index')->with('success', 'Data staf berhasil dihapus (simulasi).');
   }
}


