<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Guru</title>

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

    #themeToggle {
        cursor: pointer;
        font-size: 1.2rem;
        float: right;
        margin-top: -50px;
    }

    .table-container {
        background: #1e1e1e;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.6);
        overflow-x: auto;
    }

    body.light-mode .table-container {
        background: #fff;
        color: #1c1e21;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    table {
        width: 100%;
    }

    th, td {
        vertical-align: middle !important;
    }

    .badge-mapel { background: linear-gradient(135deg, #ff9800, #ff5722); color: #fff; font-weight: 600; }
</style>
</head>
<body>

<h1>Detail Guru</h1>
<span id="themeToggle" title="Ganti Tema"><i class="bi bi-moon-fill"></i></span>
<a href="{{ route('guru.index') }}" class="back-link"><i class="bi bi-arrow-left"></i> Kembali</a>

<div class="table-container">
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>MAPEL</th>
                <th>NO HP</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $guru->id }}</td>
                <td>{{ $guru->nama }}</td>
                <td>{{ $guru->nip }}</td>
                <td><span class="badge badge-mapel">{{ $guru->mapel }}</span></td>
                <td>{{ $guru->no_hp }}</td>
                <td>{{ $guru->email }}</td>
            </tr>
        </tbody>
    </table>
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
