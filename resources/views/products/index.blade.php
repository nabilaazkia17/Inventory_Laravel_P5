@extends('layouts.app')
@section('title', 'Daftar Produk')
@section('content')
<div class="panel">
    <div class="actions" style="justify-content:space-between;align-items:center">
        <div><h1>Daftar Produk</h1><p class="muted">Kelola barang, harga, kategori, dan jumlah stok.</p></div>
        <a class="btn" href="{{ route('products.create') }}">+ Tambah Produk</a>
    </div>
    <form method="GET" action="{{ route('products.index') }}" class="panel" style="background:#f8fafc">
        <div class="grid">
            <label>Cari nama / SKU
                <input name="search" value="{{ request('search') }}" placeholder="Contoh: SKU-0001">
            </label>
            <label>Kategori
                <select name="category_id"><option value="">Semua kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @selected(request('category_id') == $category->id)>{{ $category->name }}</option>
                    @endforeach
                </select>
            </label>
            <label>Urutkan berdasarkan
                <select name="sort">
                    @foreach(['name'=>'Nama','sku'=>'SKU','price'=>'Harga','stock'=>'Stok','created_at'=>'Tanggal dibuat'] as $key=>$label)
                        <option value="{{ $key }}" @selected($sort === $key)>{{ $label }}</option>
                    @endforeach
                </select>
            </label>
            <label>Arah
                <select name="direction"><option value="asc" @selected($direction==='asc')>Naik (A–Z)</option><option value="desc" @selected($direction==='desc')>Turun (Z–A)</option></select>
            </label>
        </div>
        <div class="actions"><button class="btn">Terapkan</button><a class="btn secondary" href="{{ route('products.index') }}">Reset</a></div>
    </form>
    <div class="table-wrap"><table>
        <thead><tr><th>SKU</th><th>Nama produk</th><th>Kategori</th><th>Harga</th><th>Stok</th><th>Aksi</th></tr></thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->sku }}</td><td><strong>{{ $product->name }}</strong><br><span class="muted">{{ Str::limit($product->description, 55) }}</span></td>
                <td>{{ $product->category->name }}</td><td>Rp {{ number_format((float)$product->price, 0, ',', '.') }}</td>
                <td>{{ $product->stock }} @if($product->isLowStock()) <span class="badge">Stok menipis</span> @endif</td>
                <td><div class="actions"><a href="{{ route('products.show',$product) }}">Detail</a><a href="{{ route('products.edit',$product) }}">Edit</a>
                    <form class="inline" method="POST" action="{{ route('products.destroy',$product) }}" onsubmit="return confirm('Hapus produk ini?')">@csrf @method('DELETE')<button class="btn danger" style="padding:5px 8px">Hapus</button></form>
                </div></td>
            </tr>
        @empty <tr><td colspan="6">Belum ada produk. Tambahkan produk pertama.</td></tr> @endforelse
        </tbody>
    </table></div>
    <div class="pagination">{{ $products->links() }}</div>
</div>
@endsection
