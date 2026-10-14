@extends('layouts.app')
@section('title','Edit Produk')
@section('content')
<div class="panel"><h1>Edit Produk</h1><form method="POST" action="{{ route('products.update',$product) }}">@method('PUT') @include('products._form', ['submitLabel'=>'Simpan Perubahan'])</form></div>
@endsection
