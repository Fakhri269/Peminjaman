<!DOCTYPE html>
<html>
<head>
    <title>Edit Guru</title>
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
    <h1>Edit Data Guru</h1>
    <a href="{{ route('guru.index') }}"><< Kembali</a>
    <br><br>

    <form action="{{ route('guru.update', $guru->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="nama" value="{{ old('nama', $guru->nama) }}" placeholder="Nama">
        @error('nama') <div class="text-danger">{{ $message }}</div> @enderror


        <input type="text" name="nip" value="{{ old('nip', $guru->nip) }}" placeholder="NIP">
        @error('nip') <div class="text-danger">{{ $message }}</div> @enderror

        <input type="text" name="mapel" value="{{ old('mapel', $guru->mapel) }}" placeholder="Mapel">
        @error('mapel') <div class="text-danger">{{ $message }}</div> @enderror


        <input type="text" name="no_hp" value="{{ old('no_hp', $guru->no_hp) }}" placeholder="Nomor HP">
        @error('no_hp') <div class="text-danger">{{ $message }}</div> @enderror

        <input type="email" name="email" value="{{ old('email', $guru->email) }}" placeholder="Email">
        @error('email') <div class="text-danger">{{ $message }}</div> @enderror

        <button type="submit">Update</button>
    </form>
</body>
</html>
