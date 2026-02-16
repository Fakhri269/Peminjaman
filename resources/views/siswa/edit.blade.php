<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <style>
        body { font-family: Arial; margin: 40px; background: #f4f6f9; }
        form {
            background: #fff;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0 4px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .text-danger {
            color: red;
            font-size: 14px;
            margin-bottom: 12px;
        }
        button {
            background: #f39c12;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover { background: #d68910; }
        a { text-decoration: none; color: #3498db; }
    </style>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <a href="{{ route('siswa.index') }}"><< Kembali</a>
    <br><br>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $siswa->nama_lengkap) }}" placeholder="Nama Lengkap">
        @error('nama_lengkap') <div class="text-danger">{{ $message }}</div> @enderror

        <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}" placeholder="Tempat Lahir">
        @error('tempat_lahir') <div class="text-danger">{{ $message }}</div> @enderror

        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}">
        @error('tanggal_lahir') <div class="text-danger">{{ $message }}</div> @enderror

        <input type="text" name="nisn" value="{{ old('nisn', $siswa->nisn) }}" placeholder="NISN">
        @error('nisn') <div class="text-danger">{{ $message }}</div> @enderror

        <input type="text" name="jurusan" value="{{ old('jurusan', $siswa->jurusan) }}" placeholder="Jurusan">
        @error('jurusan') <div class="text-danger">{{ $message }}</div> @enderror

        <input type="text" name="angkatan" value="{{ old('angkatan', $siswa->angkatan) }}" placeholder="Angkatan">
        @error('angkatan') <div class="text-danger">{{ $message }}</div> @enderror

        <input type="text" name="kelas" value="{{ old('kelas', $siswa->kelas) }}" placeholder="Kelas">
        @error('kelas') <div class="text-danger">{{ $message }}</div> @enderror

        <input type="text" name="no_hp" value="{{ old('no_hp', $siswa->no_hp) }}" placeholder="Nomor HP">
        @error('no_hp') <div class="text-danger">{{ $message }}</div> @enderror

        <button type="submit">Update</button>
    </form>
</body>
</html>
