<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Http\Request;

class StafController extends Controller
{
    public function index()
    {
        $data = Staf::all();
        return view('staf.index', compact('data'));
    }

    public function create()
    {
        return view('staf.create');
    }

    public function store(Request $request)
    {
        Staf::saveToSession($request->only(['NAMA', 'DEPARTEMEN', 'NOMOR_TELEPON', 'GAJI']));
        return redirect()->route('staf.index');
    }

    public function show($id)
    {
        $staf = Staf::find($id);
        return view('staf.show', compact('staf'));
    }

    public function edit($id)
    {
        $staf = Staf::find($id);
        return view('staf.edit', compact('staf'));
    }

    public function update(Request $request, $id)
    {
        Staf::updateSession($id, $request->only(['NAMA', 'DEPARTEMEN', 'NOMOR_TELEPON', 'GAJI']));
        return redirect()->route('staf.index');
    }

    public function destroy($id)
    {
        Staf::deleteFromSession($id);
        return redirect()->route('staf.index');
    }
    public function confirmDelete($id)
{
    $staf = Staf::find($id);
    return view('staf.delete', compact('staf'));
}

}