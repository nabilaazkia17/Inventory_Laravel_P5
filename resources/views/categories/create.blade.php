@extends('layouts.app')
@section('title','Tambah Kategori')
@section('content')
<div class="panel"><h1>Tambah Kategori</h1><form method="POST" action="{{ route('categories.store') }}">@include('categories._form',['submitLabel'=>'Simpan Kategori'])</form></div>
@endsection
