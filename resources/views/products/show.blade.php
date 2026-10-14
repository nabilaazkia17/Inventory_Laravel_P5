@extends('layouts.app')
@section('title','Detail Produk')
@section('content')
<div class="panel">
    <div class="actions" style="justify-content:space-between"><h1>{{ $product->name }}</h1><a class="btn secondary" href="{{ route('products.index') }}">Kembali</a></div>
    <div class="grid">
        <div><p class="muted">SKU</p><strong>{{ $product->sku }}</strong></div>
        <div><p class="muted">Kategori</p><strong>{{ $product->category->name }}</strong></div>
        <div><p class="muted">Harga</p><strong>Rp {{ number_format((float)$product->price,0,',','.') }}</strong></div>
        <div><p class="muted">Stok</p><strong>{{ $product->stock }}</strong> @if($product->isLowStock()) <span class="badge">Stok menipis</span> @endif</div>
    </div>
    <div class="actions"><a class="btn" href="{{ route('products.edit',$product) }}">Edit Produk</a></div>
</div>
<div class="panel">
    <h2>Penyesuaian Stok</h2><p class="muted">Masukkan angka positif untuk menambah stok dan negatif untuk mengurangi stok.</p>
    <form method="POST" action="{{ route('products.adjust-stock',$product) }}">@csrf
        <label>Perubahan stok <input type="number" name="adjustment" required min="-100000" max="100000" placeholder="Contoh: 5 atau -2"></label>
        @error('adjustment')<p class="error-text">{{ $message }}</p>@enderror
        <button class="btn">Sesuaikan Stok</button>
    </form>
</div>
@endsection
