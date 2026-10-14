@extends('layouts.app')

@section('content')
    <h1>Tambah Produk</h1>

    @if($errors->any())
        <div>
            <strong>Periksa kembali isian kamu:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('products.store') }}">
        @include('products._form', ['submitLabel' => 'Simpan'])
    </form>
@endsection