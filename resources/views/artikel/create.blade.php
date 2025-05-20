@extends('layouts.app') <!-- Sesuaikan dengan layout yang digunakan -->

@section('content')
<div class="container article-form">
    <h2>Buat Artikel Baru</h2>
    
    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Input Judul -->
        <div class="form-group">
            <label for="title">Judul Artikel</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <!-- Input Nama Penulis -->
        <div class="form-group">
            <label for="author_name">Nama Penulis</label>
            <input type="text" class="form-control" id="author_name" name="author_name" required>
        </div>

        <!-- Input Gambar Profil -->
        <div class="form-group">
            <label for="profile_picture">URL Gambar Profil</label>
            <input type="url" class="form-control" id="profile_picture" name="profile_picture" required>
        </div>

        <!-- Input Gambar Header -->
        <div class="form-group">
            <label for="header_image">URL Gambar Header</label>
            <input type="url" class="form-control" id="header_image" name="header_image" required>
        </div>

        <!-- Input Konten -->
        <div class="form-group">
            <label for="content">Isi Artikel</label>
            <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Publikasikan</button>
    </form>
</div>
@endsection