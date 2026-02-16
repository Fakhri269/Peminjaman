<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Siswa - Export Excel & PDF</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<!-- DataTables + Buttons CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

<style>
body{
    padding:30px;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#74ebd5,#ACB6E5);
    transition:background 0.4s ease,color 0.4s ease;
}
body.dark-mode{ background:linear-gradient(135deg,#232526,#414345); color:#f1f1f1; }

.container{
    background:rgba(255,255,255,0.9);
    padding:30px;
    border-radius:20px;
    box-shadow:0 12px 25px rgba(0,0,0,0.15);
    transition:background 0.4s ease;
}
body.dark-mode .container{ background:rgba(0,0,0,0.7); }

h1{font-weight:700;font-size:1.9rem;text-align:center;color:#333;margin-bottom:25px;}
body.dark-mode h1{color:#f8f9fa;}

.table{border-radius:12px;overflow:hidden;font-size:0.9rem;}
.table thead.table-dark{background:linear-gradient(135deg,#2c3e50,#34495e);}
.table-hover tbody tr:hover{background-color:#e3f2fd;}
body.dark-mode .table-hover tbody tr:hover{background-color:#3a3a3a;}

.badge-jurusan{background:linear-gradient(135deg,#ff9a9e,#fad0c4);color:#222;}
.badge-angkatan{background:linear-gradient(135deg,#a18cd1,#fbc2eb);color:#222;}

.dataTables_wrapper .dataTables_filter input,
.dataTables_wrapper .dataTables_length select{
    border-radius:10px;
    padding:6px 12px;
    border:1px solid #ccc;
}

.dt-buttons{margin-bottom:15px;}
.dt-buttons .btn{border:none;border-radius:10px;margin-right:8px;}
.btn-excel{background:linear-gradient(135deg,#43a047,#66bb6a);color:#fff;}
.btn-pdf{background:linear-gradient(135deg,#c62828,#e53935);color:#fff;}
.btn-print{background:linear-gradient(135deg,#546e7a,#78909c);color:#fff;}
.btn:hover{opacity:.9;transform:translateY(-2px);}

.theme-switch{position:absolute;top:25px;right:40px;}
.export-btn-sm{
    border:none;
    border-radius:10px !important;
    padding:6px 12px;
    font-size:0.85rem;
    font-weight:600;
    transition:all .25s ease;
}
.export-btn-sm:hover{
    transform:translateY(-2px);
    box-shadow:0 4px 12px rgba(0,0,0,.2);
}
</style>
</head>
<body>
    

<div class="container position-relative">
    <h1>Data Siswa</h1>

    <div class="container position-relative">
    <div class="mb-3">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">
            ⬅ Back to Dashboard
        </a>
    </div>


    <div class="mb-3 text-end">
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">
            <i class="bi bi-person-plus-fill"></i> Tambah Siswa
        </a>
    </div>

    <div class="table-responsive">
        <table id="siswaTable" class="table table-striped table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>NISN</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th>Kelas</th>
                    <th>Nomor HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $siswas)
                <tr>
                    <td>{{ $siswas->id }}</td>
                    <td>{{ $siswas->nama_lengkap }}</td>
                    <td>{{ $siswas->tempat_lahir }}</td>
                    <td>{{ $siswas->tanggal_lahir }}</td>
                    <td>{{ $siswas->nisn }}</td>
                    <td><span class="badge badge-jurusan">{{ $siswas->jurusan }}</span></td>
                    <td><span class="badge badge-angkatan">{{ $siswas->angkatan }}</span></td>
                    <td>{{ $siswas->kelas }}</td>
                    <td>{{ $siswas->no_hp }}</td>
                    <td class="text-center">
                        <a href="{{ route('siswa.show',$siswas->id) }}" class="btn btn-info btn-sm mb-1"><i class="bi bi-eye-fill"></i></a>
                        <a href="{{ route('siswa.edit',$siswas->id) }}" class="btn btn-warning btn-sm mb-1"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('siswa.destroy',$siswas->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mb-1"><i class="bi bi-trash-fill"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- jQuery + Bootstrap Bundle -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- DataTables Buttons + Export -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script>
$(function(){
    // === DataTables ===
    $('#siswaTable').DataTable({
        dom: '<"row mb-2"<"col-md-6 d-flex align-items-center gap-2"B><"col-md-6"f>>rt<"row mt-3"<"col-md-6"l><"col-md-6 text-end"p>>',
        lengthChange: false,
        buttons: [
            { 
                extend:'excelHtml5',
                text:'<i class="bi bi-file-earmark-excel-fill me-1"></i>Excel',
                className:'btn btn-success export-btn-sm'
            },
            { 
                extend:'pdfHtml5',
                text:'<i class="bi bi-file-earmark-pdf-fill me-1"></i>PDF',
                className:'btn btn-danger export-btn-sm',
                orientation:'landscape',
                pageSize:'A4'
            },
            { 
                extend:'print',
                text:'<i class="bi bi-printer-fill me-1"></i>Print',
                className:'btn btn-secondary export-btn-sm'
            }
        ],
        language:{
            search:"🔍 Cari:",
            info:"Menampilkan START - END dari TOTAL data",
            paginate:{ first:"Awal", last:"Akhir", next:"➡", previous:"⬅" }
        }
    });
});
</script>
</body>
</html>