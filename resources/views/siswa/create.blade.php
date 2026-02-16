<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Siswa</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
    :root {
        --bg-body: #121212;
        --text-color: #e0e0e0;
        --bg-form: #1e1e1e;
        --input-bg: #2a2a2a;
        --input-border: #444;
        --btn-bg: #0d6efd;
        --btn-hover: #0b5ed7;
        --link-color: #0d6efd;
    }

    body.light-mode {
        --bg-body: #f4f6f9;
        --text-color: #1c1e21;
        --bg-form: #ffffff;
        --input-bg: #fdfdfd;
        --input-border: #ccc;
        --btn-bg: #0d6efd;
        --btn-hover: #0b5ed7;
        --link-color: #0d6efd;
    }

    body {
        font-family: 'Segoe UI', sans-serif;
        background: var(--bg-body);
        color: var(--text-color);
        padding: 40px;
        transition: all 0.3s ease;
    }
    h1 { font-weight: 700; color: var(--text-color); }

    a.back-link {
        color: var(--link-color);
        text-decoration: none;
        font-weight: 500;
    }
    a.back-link:hover { text-decoration: underline; }

    form {
        background: var(--bg-form);
        padding: 30px;
        width: 100%;
        max-width: 500px;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.6);
        transition: all 0.3s ease;
    }

    .form-group {
        margin-bottom: 20px;
        position: relative;
    }
    .form-group i {
        position: absolute;
        top: 12px;
        left: 12px;
        color: #adb5bd;
    }

    input, select {
        width: 100%;
        padding: 10px 12px 10px 36px;
        background: var(--input-bg);
        border: 1px solid var(--input-border);
        border-radius: 10px;
        color: var(--text-color);
        transition: all 0.2s;
    }
    input:focus, select:focus {
        border-color: var(--btn-bg);
        box-shadow: 0 0 5px rgba(13,110,253,0.5);
        outline: none;
    }

    button {
        background: var(--btn-bg);
        color: #fff;
        border: none;
        padding: 12px 20px;
        border-radius: 12px;
        cursor: pointer;
        width: 100%;
        font-weight: 600;
        transition: all 0.2s;
    }
    button:hover {
        background: var(--btn-hover);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    #themeToggle {
        cursor: pointer;
        float: right;
        font-size: 1.2rem;
        margin-bottom: 15px;
        transition: color 0.3s;
    }

    .text-danger {
        font-size: 0.875rem;
    }
</style>
</head>
<body>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Tambah Data Siswa</h1>
    <span id="themeToggle" title="Ganti Tema"><i class="bi bi-moon-fill"></i></span>
</div>

<a href="{{ route('siswa.index') }}" class="back-link"><i class="bi bi-arrow-left"></i> Kembali</a>
<br><br>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <i class="bi bi-card-text"></i>
        <input type="text" name="nisn" placeholder="NISN" value="{{ old('nisn') }}" required>
        @error('nisn')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <i class="bi bi-person-fill"></i>
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}" required>
        @error('nama_lengkap')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <i class="bi bi-geo-alt-fill"></i>
        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}">
        @error('tempat_lahir')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <i class="bi bi-calendar-date-fill"></i>
        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
        @error('tanggal_lahir')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <i class="bi bi-layout-text-window-reverse"></i>
        <input type="text" name="kelas" placeholder="Kelas" value="{{ old('kelas') }}" required>
        @error('kelas')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <i class="bi bi-book-fill"></i>
        <input type="text" name="jurusan" placeholder="Jurusan" value="{{ old('jurusan') }}" required>
        @error('jurusan')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <i class="bi bi-people-fill"></i>
        <input type="text" name="angkatan" placeholder="Angkatan" value="{{ old('angkatan') }}" required>
        @error('angkatan')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <i class="bi bi-telephone-fill"></i>
        <input type="text" name="no_hp" placeholder="Nomor HP" value="{{ old('no_hp') }}" required>
        @error('no_hp')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit"><i class="bi bi-save"></i> Simpan</button>
</form>

<script>
    const toggle = document.getElementById('themeToggle');
    toggle.addEventListener('click', () => {
        document.body.classList.toggle('light-mode');
        const icon = toggle.querySelector('i');
        if(document.body.classList.contains('light-mode')) {
            icon.classList.remove('bi-moon-fill');
            icon.classList.add('bi-sun-fill');
        } else {
            icon.classList.remove('bi-sun-fill');
            icon.classList.add('bi-moon-fill');
        }
    });
</script>

</body>
</html>
