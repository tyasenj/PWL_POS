@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <div class="card-title">Buat kategori baru</div>
        </div>

        <form action="../kategori" method="post">
            @csrf {{-- Tambahkan ini untuk menambahkan token CSRF --}}

            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">Kode Kategori</label>
                    <input type="text" name="kategori_kode" id="kodeKategori" 
                    class="form-control @error('kategori_kode') is-invalid @enderror" 
                    placeholder="Masukkan Kode Kategori">

                    @error('kategori_kode')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" name="kategori_nama" id="namaKategori" 
                    class="form-control @error('kategori_nama') is-invalid @enderror" 
                    placeholder="Masukkan Nama Kategori">

                    @error('kategori_nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

     {{-- Tampilkan pesan kesalahan validasi --}}
     @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
</div>
@endsection