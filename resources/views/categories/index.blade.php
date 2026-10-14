@extends('layouts.app')
@section('title','Kategori')
@section('content')
<div class="panel">
    <div class="actions" style="justify-content:space-between"><h1>Kategori</h1><a class="btn" href="{{ route('categories.create') }}">+ Tambah Kategori</a></div>
    <div class="table-wrap"><table><thead><tr><th>Nama</th><th>Deskripsi</th><th>Jumlah produk</th><th>Aksi</th></tr></thead><tbody>
    @forelse($categories as $category)
        <tr><td><strong>{{ $category->name }}</strong></td><td>{{ $category->description ?: '—' }}</td><td>{{ $category->products_count }}</td>
        <td><div class="actions"><a href="{{ route('categories.edit',$category) }}">Edit</a>
        <form class="inline" method="POST" action="{{ route('categories.destroy',$category) }}" onsubmit="return confirm('Hapus kategori ini?')">@csrf @method('DELETE')<button class="btn danger" style="padding:5px 8px">Hapus</button></form></div></td></tr>
    @empty <tr><td colspan="4">Belum ada kategori.</td></tr> @endforelse
    </tbody></table></div>
    <div class="pagination">{{ $categories->links() }}</div>
</div>
@endsection
