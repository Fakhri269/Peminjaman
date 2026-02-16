<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            color: #000000ff;
        }

        .card {
            width: 480px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(15px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.25);
            border-radius: 18px;
            padding: 30px;
            animation: fadeIn 0.7s ease-in-out;
            color: black;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(25px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            font-weight: 600;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label { font-size: 14px; font-weight: 500; margin-bottom: 6px; display: block; }

        select, input, textarea {
            width: 100%;
            padding: 10px;
            background: rgba(36, 36, 36, 0.2);
            border: none;
            border-radius: 10px;
            font-size: 14px;
            color: #0e0e0eff;
            outline: none;
            margin-bottom: 15px;
            transition: .25s;
        }

        input:focus, select:focus, textarea:focus {
            background: rgba(255,255,255,0.35);
            box-shadow: 0 0 8px #00d1ff;
        }

        textarea { height: 90px; }

        button {
            padding: 10px 18px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            transition: .25s;
        }

        #cekBtn, #cekBarangBtn {
            background: #ffc107;
            color: #222;
            width: auto;
        }

        #cekBtn:hover, #cekBarangBtn:hover {
            background: #e0a800;
        }

        .btn-submit {
            background: #00d1ff;
            width: 100%;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background: #00a2cc;
            transform: translateY(-2px);
            box-shadow: 0 3px 12px rgba(0,209,255,0.5);
        }

        .input-group { display: flex; gap: 8px; align-items: center; }

        #result-id, #result-barang {
            margin-top: -10px;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="card">
    
    <h2>📦 Form Peminjaman Barang</h2>

    @if (session('success'))
        <div style="background:#15ff87; color:#004d24; padding:10px; border-radius:8px; text-align:center; margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf

        <label>Jenis Peminjam</label>
        <select name="role" required>
            <option value="">-- Pilih --</option>
            <option value="Siswa">Siswa</option>
            <option value="Guru">Guru</option>
        </select>

        <label>ID Peminjam</label>
        <div class="input-group">
            <input type="text" name="peminjam_id" placeholder="Masukkan ID">
            <button type="button" id="cekBtn">Cek ID</button>
        </div>
        <div id="result-id"></div>

        <label>Barang Dipinjam</label>
        <div class="input-group">
            <input type="text" name="barang_id" placeholder="Masukkan ID Barang">
            <button type="button" id="cekBarangBtn">Cek Barang</button>
        </div>
        <div id="result-barang"></div>

        <label>Tanggal Pinjam</label>
        <input type="datetime-local" name="tanggal_pinjam">

        <label>Tanggal Kembali</label>
        <input type="datetime-local" name="tanggal_kembali">

        <label>Keterangan</label>
        <textarea name="keterangan"></textarea>

        <button class="btn-submit" type="submit">💾 Simpan Peminjaman</button>

        <div class="mb-3">
            <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">⬅ Back to Dashboard</a>
        </div>

    </form>
</div>

<script>
document.getElementById("cekBtn").addEventListener("click", function () {
    const role = document.querySelector('select[name="role"]').value;
    const peminjam_id = document.querySelector('input[name="peminjam_id"]').value;
    const resultDiv = document.getElementById("result-id");

    if (!role || !peminjam_id) {
        resultDiv.textContent = "⚠ Isi role & ID dulu!";
        resultDiv.style.color = "yellow";
        return;
    }

    fetch(`{{ route('cek.peminjam') }}?role=${role}&peminjam_id=${peminjam_id}`)
        .then(res => res.json())
        .then(data => {
            if (data.status) {
                resultDiv.textContent = "✔ " + data.nama + " ditemukan";
                resultDiv.style.color = "#00ff95";
            } else {
                resultDiv.textContent = "❌ ID tidak ditemukan!";
                resultDiv.style.color = "#ff6e6e";
            }
        })
});

document.getElementById("cekBarangBtn").addEventListener("click", function () {
    const barang_id = document.querySelector('input[name="barang_id"]').value;
    const resultDiv = document.getElementById("result-barang");

    if (!barang_id) {
        resultDiv.textContent = "⚠ Isi ID Barang dulu!";
        resultDiv.style.color = "yellow";
        return;
    }

    fetch(`{{ route('cek.barang') }}?barang_id=${barang_id}`)
        .then(res => res.json())
        .then(data => {
            if (data.status) {
                resultDiv.textContent = "✔ Barang ditemukan: " + data.nama;
                resultDiv.style.color = "#00ffb0";
            } else {
                resultDiv.textContent = "❌ Barang tidak ditemukan!";
                resultDiv.style.color = "#ff8484";
            }
        })
});
</script>

</body>
</html>
