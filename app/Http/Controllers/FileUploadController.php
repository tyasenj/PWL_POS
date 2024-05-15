<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request)
    {

        $request->validate([
            'berkas' => 'required|file|image|max:500',
            'nama_file' => 'required|string|max:255'
        ]);

        $originalFileName = $request->file('berkas')->getClientOriginalName();
        $extfile = $request->file('berkas')->getClientOriginalExtension();
        $namaFile = 'web-' . time() . "." . $extfile;

        $path = $request->file('berkas')->move('gambar', $namaFile);
        $path = str_replace("\\", "/", $path);

        $pathBaru = asset('gambar/' . $namaFile);
        return view('file-upload-result', compact('path', 'pathBaru', 'originalFileName'));
    }
}
