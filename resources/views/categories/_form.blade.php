@csrf
<label>Nama kategori <input name="name" value="{{ old('name',$category->name) }}" required maxlength="100"></label>
<label>Deskripsi <textarea name="description" rows="3">{{ old('description',$category->description) }}</textarea></label>
<div class="actions"><button class="btn">{{ $submitLabel ?? 'Simpan' }}</button><a class="btn secondary" href="{{ route('categories.index') }}">Batal</a></div>
