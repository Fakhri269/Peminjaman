<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Siswa</title>

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
        max-width: 500px;
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
    .info strong { width: 120px; display: inline-block; }

    .badge-jurusan { background: linear-gradient(135deg, #ff9800, #ff5722); color: #fff; font-weight: 600; }
    .badge-angkatan { background: linear-gradient(135deg, #4caf50, #2e7d32); color: #fff; font-weight: 600; }
    .badge-kelas { background: linear-gradient(135deg, #2196f3, #0d47a1); color: #fff; font-weight: 600; }

    #themeToggle {
        cursor: pointer;
        font-size: 1.2rem;
        float: right;
        margin-top: -50px;
    }
</style>
</head>
<body>

<h1>Detail Siswa</h1>
<span id="themeToggle" title="Ganti Tema"><i class="bi bi-moon-fill"></i></span>
<a href="{{ route('siswa.index') }}" class="back-link"><i class="bi bi-arrow-left"></i> Kembali</a>

<div class="card">
    <div class="info"><strong>ID:</strong> {{ $siswa->id }}</div>
    <div class="info"><strong>Nama Lengkap:</strong> {{ $siswa->nama_lengkap }}</div>
    <div class="info"><strong>Tempat Lahir:</strong> {{ $siswa->tempat_lahir }}</div>
    <div class="info"><strong>Tanggal Lahir:</strong> {{ $siswa->tanggal_lahir }}</div>
    <div class="info"><strong>NISN:</strong> {{ $siswa->nisn }}</div>
    <div class="info"><strong>Jurusan:</strong> <span class="badge badge-jurusan">{{ $siswa->jurusan }}</span></div>
    <div class="info"><strong>Angkatan:</strong> <span class="badge badge-angkatan">{{ $siswa->angkatan }}</span></div>
    <div class="info"><strong>Kelas:</strong> <span class="badge badge-kelas">{{ $siswa->kelas }}</span></div>
    <div class="info"><strong>Nomor HP:</strong> {{ $siswa->no_hp }}</div>
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