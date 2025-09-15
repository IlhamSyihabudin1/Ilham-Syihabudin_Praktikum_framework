@extends('layouts.app')
@section('content')
<div class="gallery-container">
    <h2>Galeri Tipe Mobil Suzuki</h2>
    {{-- Memanggil gambar galeri dari folder public/images --}}
    <img src="{{ asset('images/galeri-mobil.jpg') }}" alt="Galeri Mobil Suzuki" class="gallery-image">
</div>
