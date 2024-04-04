<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\LevelDataTable;
use App\Models\levelModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LevelController extends Controller
{
    public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.index');
    }
    public function tambah()
    {
        return view('level_tambah');
    }
    public function tambah_simpan(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'level_id' => 'required|unique:post|max:255',
            'level_nama' => 'required',
            'level_kode' => 'required',
        ]);
        //store
        levelModel::create($validated);
        return redirect('/kategori');
    }
}
