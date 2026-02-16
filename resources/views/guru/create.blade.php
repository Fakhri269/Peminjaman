<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Guru</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #74ebd5, #ACB6E5);
    color: #212529;
    min-height: 100vh;
    padding: 40px;
    transition: all 0.4s ease;
}
body.dark-mode {
    background: linear-gradient(135deg, #232526, #414345);
    color: #f1f1f1;
}

.container {
    background: rgba(255,255,255,0.9);
    padding: 35px;
    border-radius: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    max-width: 600px;
    transition: all 0.4s ease;
}
body.dark-mode .container {
    background: rgba(0,0,0,0.7);
}

h1 {
    text-align: center;
    font-weight: 700;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
    position: relative;
}
.form-group i {
    position: absolute;
    top: 12px;
    left: 12px;
    color: #6c757d;
}
input {
    width: 100%;
    padding: 10px 12px 10px 36px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #fff;
    transition: all 0.3s ease;
}
input:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 6px rgba(13,110,253,0.4);
    outline: none;
}
body.dark-mode input {
    background-color: #2a2a2a;
    border-color: #444;
    color: #f1f1f1;
}
body.dark-mode input:focus {
    border-color: #66b2ff;
}

button {
    background: linear-gradient(135deg,#0d6efd,#0b5ed7);
    color: #fff;
    border: none;
    padding: 12px;
    border-radius: 12px;
    width: 100%;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
}
button:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 14px rgba(0,0,0,0.3);
}

a.back-link {
    text-decoration: none;
    color: #0d6efd;
    font-weight: 500;
}
a.back-link:hover { text-decoration: underline; }

#themeToggle {
    cursor: pointer;
    float: right;
    font-size: 1.4rem;
    color: #0d6efd;
    transition: transform 0.3s;
}
#themeToggle:hover { transform: rotate(15deg); }

.text-danger { font-size: 0.875rem; }
</style>
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Tambah Data Guru</h1>
        <span id="themeToggle" title="Ganti Tema"><i class="bi bi-moon-fill"></i></span>
    </div>

    <a href="{{ route('guru.index') }}" class="back-link">
        <i class="bi bi-arrow-left"></i> Kembali ke Data Guru
    </a>
    <hr>

    <form action="{{ route('guru.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <i class="bi bi-card-list"></i>
            <input type="text" name="nip" placeholder="NIP" value="{{ old('nip') }}" required>
            @error('nip')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <i class="bi bi-person-fill"></i>
            <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <i class="bi bi-journal-bookmark-fill"></i>
            <input type="text" name="mapel" placeholder="Mata Pelajaran" value="{{ old('mapel') }}" required>
            @error('mapel')
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

        <div class="form-group">
            <i class="bi bi-envelope-fill"></i>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit"><i class="bi bi-save"></i> Simpan Data</button>
    </form>
</div>

<script>
    const toggle = document.getElementById('themeToggle');
    toggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        const icon = toggle.querySelector('i');
        if (document.body.classList.contains('dark-mode')) {
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
