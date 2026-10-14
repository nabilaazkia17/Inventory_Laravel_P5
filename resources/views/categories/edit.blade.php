@extends('layouts.app')
@section('title','Edit Kategori')
@section('content')
<div class="panel"><h1>Edit Kategori</h1><form method="POST" action="{{ route('categories.update',$category) }}">@method('PUT') @include('categories._form',['submitLabel'=>'Simpan Perubahan'])</form></div>
@endsection
