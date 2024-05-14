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
        //dump($request->berkas);
        //return "Pemrosesan file upload di sini";
        $request->validate([
            'berkas' => 'required|file|image|max:500',
        ]);
        //$path = $request->berkas->store('uploads');
        //$namaFile = $request->berkas->getClientOriginalName();
        //$path = $request->berkas->storeAs('uploads', $namaFile );

        $extfile = $request->berkas->getClientOriginalName();
        $namaFile = 'web-' . time() . "." . $extfile;
        //$path = $request->berkas->storeAs('public', $namaFile); //gambar disimpan di public

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\", "//", $path);
        echo "variabel path berisi: $path <br>";

        //$pathBaru = asset('storage/' . $namaFile);
        $pathBaru = asset('gambar/' . $namaFile);
        echo "proses upload berhasil, file berada di: $path";
        echo "<br>";
        echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
        //echo $request->berkas->getClientOriginalName() . " lolos validasi";
    }
}
