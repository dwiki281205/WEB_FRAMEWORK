@extends('layouts.main')

@section('content')

<h1 class="mb-4">Daftar Barang Inventaris</h1>

<!-- Tombol atas -->
<div class="mb-3">
    <a href="/insert" class="btn btn-primary">+ Tambah Data Otomatis</a>
</div>

<table class="table table-striped table-bordered align-middle">
    <thead class="table-dark">
        <tr>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse($products as $p)
        <tr>
            <td>{{ $p->name }}</td>
            <td>{{ $p->category->name ?? '-' }}</td>
            <td>Rp {{ number_format($p->price) }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->description ?? '-' }}</td>

            <td>
                @if($p->status == 'tersedia')
                    <span class="badge bg-success">Tersedia</span>
                @else
                    <span class="badge bg-danger">Habis</span>
                @endif
            </td>

            <!-- Tombol kanan -->
            <td>
                <a href="/update/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>

                <a href="/delete/{{ $p->id }}" 
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin mau hapus data ini?')">
                   Hapus
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center">Data tidak ada</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $products->links('pagination::bootstrap-5') }}
</div>

@endsection