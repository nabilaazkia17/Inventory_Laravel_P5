@php
    $product = $product ?? new \App\Models\Product;
    $categories = $categories ?? \App\Models\Category::orderBy('name')->get();
    $submitLabel = $submitLabel ?? 'Simpan';
@endphp
@csrf
<div class="grid">
    <label>Kategori
        <select name="category_id" required>
            <option value="">Pilih kategori</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id) == $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </label>

    <label>SKU
        <input name="sku" value="{{ old('sku', $product->sku) }}" required maxlength="50">
    </label>

    <label>Nama produk
        <input name="name" value="{{ old('name', $product->name) }}" required maxlength="150">
    </label>

    <label>Harga (Rupiah)
        <input type="number" name="price" min="0" step="0.01" value="{{ old('price', $product->price) }}" required>
    </label>

    <label>Stok saat ini
        <input type="number" name="stock" min="0" value="{{ old('stock', $product->stock ?? 0) }}" required>
    </label>

    <label>Batas minimum stok
        <input type="number" name="minimum_stock" min="0" value="{{ old('minimum_stock', $product->minimum_stock ?? 0) }}" required>
    </label>
</div>

<div class="actions">
    <button class="btn">{{ $submitLabel }}</button>
    <a class="btn secondary" href="{{ url('/products') }}">Batal</a>
</div>