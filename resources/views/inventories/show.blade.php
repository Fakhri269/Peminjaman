<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Barang</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        padding: 40px;
        background: #121212;
        color: #e0e0e0;
        transition: all 0.3s;
    }

    body.light-mode {
        background: #f0f2f5;
        color: #1c1e21;
    }

    .back-link {
        text-decoration: none;
        font-weight: 500;
        color: #0d6efd;
        margin-bottom: 20px;
        display: inline-block;
    }
    .back-link:hover { text-decoration: underline; }

    .card {
        background: #1e1e1e;
        color: #fff;
        padding: 30px;
        border-radius: 20px;
        width: 100%;
        max-width: 600px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.6);
        transition: all 0.3s;
        margin-top: 20px;
    }

    body.light-mode .card {
        background: #fff;
        color: #1c1e21;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    h1 {
        font-weight: 700;
        margin-bottom: 20px;
    }

    .info {
        margin-bottom: 15px;
        font-size: 1.05rem;
    }
    .info strong { width: 150px; display: inline-block; }

    .badge-kategori { background: linear-gradient(135deg, #ff9800, #ff5722); color: #fff; font-weight: 600; }
    .badge-lokasi { background: linear-gradient(135deg, #4caf50, #2e7d32); color: #fff; font-weight: 600; }
    .badge-status { background: linear-gradient(135deg, #2196f3, #0d47a1); color: #fff; font-weight: 600; }

    #themeToggle {
        cursor: pointer;
        font-size: 1.2rem;
        float: right;
        margin-top: -50px;
    }

    .btn-action {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
    }
</style>
</head>
<body>

<h1>Detail Barang</h1>
<span id="themeToggle" title="Ganti Tema"><i class="bi bi-moon-fill"></i></span>
<a href="{{ route('inventories.index') }}" class="back-link"><i class="bi bi-arrow-left"></i> Kembali</a>

<div class="card">
    <div class="info"><strong>ID:</strong> {{ $inventory->id }}</div>
    <div class="info"><strong>Nama Barang:</strong> {{ $inventory->nama_barang }}</div>
    <div class="info"><strong>Kode Barang:</strong> {{ $inventory->kode_barang }}</div>
    <div class="info"><strong>Kategori:</strong> <span class="badge badge-kategori">{{ $inventory->kategori }}</span></div>
    <div class="info"><strong>Stok:</strong> {{ $inventory->stok }}</div>
    <div class="info"><strong>Harga:</strong> Rp {{ number_format($inventory->harga, 0, ',', '.') }}</div>
    <div class="info"><strong>Dibuat:</strong> {{ $inventory->created_at->format('d M Y, H:i') }}</div>
    <div class="info"><strong>Diperbarui:</strong> {{ $inventory->updated_at->format('d M Y, H:i') }}</div>

    <div class="btn-action">
        <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-warning">
            <i class="bi bi-pencil-square"></i> Edit
        </a>

        <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus barang ini?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="bi bi-trash"></i> Hapus
            </button>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const toggle = document.getElementById('themeToggle');
    toggle.addEventListener('click', () => {
        document.body.classList.toggle('light-mode');
        const icon = toggle.querySelector('i');
        if(document.body.classList.contains('light-mode')) {
            icon.classList.replace('bi-moon-fill','bi-sun-fill');
        } else {
            icon.classList.replace('bi-sun-fill','bi-moon-fill');
        }
    });
</script>

</body>
</html>
