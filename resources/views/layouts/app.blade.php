<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Inventory Management') — Laravel P5</title>
    <style>
        :root{font-family:Inter,system-ui,-apple-system,"Segoe UI",sans-serif;color:#172033;background:#f4f7fb}
        *{box-sizing:border-box}body{margin:0}header{background:#14213d;color:#fff;padding:18px 5vw}
        header strong{font-size:1.15rem}nav{display:flex;gap:18px;margin-top:12px;flex-wrap:wrap}
        nav a{color:#dbeafe;text-decoration:none}main{max-width:1120px;margin:28px auto;padding:0 18px}
        .panel{background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:22px;margin-bottom:18px;box-shadow:0 5px 18px #0f172a08}
        h1{margin-top:0}a{color:#1d4ed8}.btn{display:inline-block;padding:9px 13px;border:0;border-radius:8px;background:#1d4ed8;color:#fff;text-decoration:none;cursor:pointer;font:inherit}
        .btn.secondary{background:#e2e8f0;color:#172033}.btn.danger{background:#b91c1c}input,select,textarea{width:100%;padding:10px;border:1px solid #cbd5e1;border-radius:8px;font:inherit;margin-top:5px}
        label{display:block;font-weight:600;margin-bottom:13px}table{width:100%;border-collapse:collapse}th,td{text-align:left;padding:12px;border-bottom:1px solid #e2e8f0;vertical-align:top}th{background:#f8fafc}
        .table-wrap{overflow-x:auto}.flash{padding:12px 14px;border-radius:8px;background:#dcfce7;color:#166534;margin-bottom:16px}.flash.error{background:#fee2e2;color:#991b1b}
        .muted{color:#64748b}.actions{display:flex;gap:8px;flex-wrap:wrap}.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px}.error-text{color:#b91c1c;font-size:.9rem}
        .badge{display:inline-block;padding:4px 8px;border-radius:999px;background:#fef3c7;color:#92400e;font-size:.85rem}.pagination{display:flex;gap:12px;align-items:center;justify-content:center;margin-top:18px}
        form.inline{display:inline}footer{text-align:center;padding:30px;color:#64748b}
    </style>
</head>
<body>
<header>
    <strong>Inventory Management System</strong>
    <nav>
        <a href="{{ route('products.index') }}">Produk</a>
        <a href="{{ route('products.create') }}">Tambah Produk</a>
        <a href="{{ route('categories.index') }}">Kategori</a>
        <a href="{{ route('categories.create') }}">Tambah Kategori</a>
    </nav>
</header>
<main>
    @if(session('success')) <div class="flash">{{ session('success') }}</div> @endif
    @if(session('error')) <div class="flash error">{{ session('error') }}</div> @endif
    <x-alert />
    @yield('content')
</main>
<footer>Laravel Fundamental — Pertemuan 5</footer>
</body>
</html>
