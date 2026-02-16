    <x-app-layout>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

            body {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                font-family: 'Inter', sans-serif;
                min-height: 100vh;
                position: relative;
                overflow-x: hidden;
            }

            body::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: 
                    radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.3), transparent 50%),
                    radial-gradient(circle at 80% 80%, rgba(255, 135, 135, 0.3), transparent 50%),
                    radial-gradient(circle at 40% 20%, rgba(138, 180, 248, 0.3), transparent 50%);
                pointer-events: none;
                z-index: 0;
            }

            .container {
                position: relative;
                z-index: 1;
            }

            .header-section {
                margin-bottom: 2rem;
                animation: slideDown 0.6s ease-out;
            }

            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .page-title {
                color: #ffffff;
                font-weight: 800;
                font-size: 2.5rem;
                margin-bottom: 0.5rem;
                text-shadow: 0 4px 20px rgba(0,0,0,0.3);
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .page-subtitle {
                color: rgba(255,255,255,0.85);
                font-size: 1rem;
                font-weight: 500;
            }

            .glass-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(20px);
                border-radius: 24px;
                padding: 0;
                border: 1px solid rgba(255, 255, 255, 0.3);
                box-shadow: 
                    0 20px 60px rgba(0,0,0,0.3),
                    inset 0 1px 0 rgba(255,255,255,0.6);
                overflow: hidden;
                animation: fadeInUp 0.8s ease-out;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(40px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .alert-success {
                background: linear-gradient(135deg, #10b981 0%, #059669 100%);
                color: white;
                padding: 16px 24px;
                border-radius: 16px;
                margin: 20px;
                border: none;
                box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);
                font-weight: 600;
                animation: slideInRight 0.5s ease-out;
            }

            @keyframes slideInRight {
                from {
                    opacity: 0;
                    transform: translateX(30px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            table.table {
                width: 100%;
                margin: 0;
                border-collapse: separate;
                border-spacing: 0;
            }

            thead {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                position: sticky;
                top: 0;
                z-index: 10;
            }

            thead th {
                color: #ffffff !important;
                font-size: .8rem;
                text-transform: uppercase;
                letter-spacing: 1.2px;
                padding: 20px 16px;
                font-weight: 700;
                border: none;
            }

            tbody tr {
                background: white;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                border-bottom: 1px solid rgba(0,0,0,0.05);
            }

            tbody tr:hover {
                background: linear-gradient(135deg, #f8f9ff 0%, #fff5f7 100%);
                transform: scale(1.01) translateX(8px);
                box-shadow: 0 8px 20px rgba(0,0,0,0.08);
                z-index: 1;
            }

            tbody td {
                padding: 18px 16px;
                color: #1f2937;
                font-weight: 500;
                font-size: 0.9rem;
                vertical-align: middle;
            }

            .badge {
                padding: 8px 16px;
                font-size: .75rem;
                border-radius: 20px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                display: inline-block;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                transition: all 0.3s ease;
            }

            .badge:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 18px rgba(0,0,0,0.2);
            }

            .badge-belum { 
                background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
                color: #fff;
            }
            
            .badge-sudah { 
                background: linear-gradient(135deg, #10b981 0%, #059669 100%);
                color: #fff;
            }

            .btn-selesai {
                background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 12px;
                cursor: pointer;
                transition: all 0.3s ease;
                font-weight: 700;
                font-size: 0.85rem;
                text-transform: uppercase;
                letter-spacing: 0.5px;
                box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
            }

            .btn-selesai:hover {
                background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
                transform: translateY(-3px);
                box-shadow: 0 8px 25px rgba(59, 130, 246, 0.5);
            }

            .btn-selesai:active {
                transform: translateY(-1px);
            }

            .empty-state {
                text-align: center;
                padding: 60px 20px;
                color: #6b7280;
            }

            .empty-state-icon {
                font-size: 4rem;
                margin-bottom: 1rem;
                opacity: 0.5;
            }

            .empty-state-text {
                font-size: 1.1rem;
                font-weight: 600;
            }

            /* ID Column Styling */
            tbody td:first-child {
                font-weight: 700;
                color: #667eea;
            }

            /* Role Badge Styling */
            .role-badge {
                background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
                color: white;
                padding: 4px 12px;
                border-radius: 12px;
                font-size: 0.75rem;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .page-title {
                    font-size: 1.8rem;
                }
                
                table {
                    font-size: 0.85rem;
                }
                
                thead th, tbody td {
                    padding: 12px 8px;
                }
            }

            /* Scroll indicator */
            .table-wrapper {
                overflow-x: auto;
                scrollbar-width: thin;
                scrollbar-color: #667eea #e5e7eb;
            }

            .table-wrapper::-webkit-scrollbar {
                height: 8px;
            }

            .table-wrapper::-webkit-scrollbar-track {
                background: #f1f5f9;
                border-radius: 10px;
            }

            .table-wrapper::-webkit-scrollbar-thumb {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border-radius: 10px;
            }

            .table-wrapper::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            }

            
    .btn-outline-primary {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 18px;
        font-size: 0.9rem;
        font-weight: 600;
        color: #3b82f6; /* warna teks biru */
        border: 2px solid #3b82f6; /* border biru */
        border-radius: 12px;
        background: transparent;
        text-decoration: none;
        transition: all 0.3s ease;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
    }

    .btn-outline-primary:hover {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
    }

    .btn-outline-primary:active {
        transform: translateY(0);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
    }


        </style>

        <div class="container py-4">
            <div class="header-section">
                <h1 class="page-title">
                    <span>📋</span>
                    Data Peminjaman
                </h1>
                <p class="page-subtitle">Kelola dan pantau semua transaksi peminjaman barang</p>
            </div>
           

            <a href="{{ route('dashboard') }}" class="btn-outline-primary">
    ⬅ Kembali ke Dashboard
</a>


            <div class="glass-card">
                @if(session('success'))
                    <div class="alert-success">
                        ✓ {{ session('success') }}
                    </div>
                @endif

                <div class="table-wrapper">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Peminjam ID</th>
                                <th>Role</th>
                                <th>Barang ID</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($data as $row)
                            <tr class="text-center">
                                <td>#{{ $row->id }}</td>
                                <td>{{ $row->peminjam_id }}</td>
                                <td><span class="role-badge">{{ $row->role }}</span></td>
                                <td>{{ $row->barang_id }}</td>
                                <td>{{ \Carbon\Carbon::parse($row->tanggal_pinjam)->format('d M Y') }}</td>
                                <td>{{ $row->tanggal_kembali ? \Carbon\Carbon::parse($row->tanggal_kembali)->format('d M Y') : '-' }}</td>
                                <td>{{ $row->keterangan ?? '-' }}</td>
                                <td>
                                    @if($row->status == 'belum')
                                        <span class="badge badge-belum">⏳ Belum Dikembalikan</span>
                                    @else
                                        <span class="badge badge-sudah">✓ Sudah Dikembalikan</span>
                                    @endif
                                </td>
                                <td>
                                    @if($row->status == 'belum')
                                        <form action="{{ route('pengembalian.kembalikan', $row->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn-selesai">Kembalikan</button>
                                        </form>
                                    @else
                                        <span class="badge badge-sudah">✓ Selesai</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9">
                                    <div class="empty-state">
                                        <div class="empty-state-icon">📦</div>
                                        <div class="empty-state-text">Tidak ada data peminjaman</div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-app-layout>