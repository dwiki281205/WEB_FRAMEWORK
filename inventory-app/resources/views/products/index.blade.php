@extends('layouts.main')

@section('content')

<h1 class="mb-4">Daftar Barang Inventaris</h1>

<!-- Tombol atas -->
<div class="mb-4 d-flex gap-2">

    {{-- Tombol Tambah Data Manual --}}
    <a href="{{ route('products.create') }}"
       class="btn btn-primary px-4 py-2">

        + Tambah Data Manual

    </a>

</div>

{{-- Alert Success --}}
@if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif

<table class="table table-striped table-bordered align-middle">

    <thead class="table-dark">

        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th width="180">Aksi</th>
        </tr>

    </thead>

    <tbody>

        @forelse($products as $key => $p)

        <tr>

            {{-- Nomor otomatis pagination --}}
            <td>
                {{ $products->firstItem() + $key }}
            </td>

            {{-- Nama Barang --}}
            <td>{{ $p->name }}</td>

            {{-- Kategori --}}
            <td>
                {{ $p->category->name ?? '-' }}
            </td>

            {{-- Harga --}}
            <td>
                Rp {{ number_format($p->price) }}
            </td>

            {{-- Stok --}}
            <td>
                {{ $p->stock }}
            </td>

            {{-- Deskripsi --}}
            <td>
                {{ $p->description ?? '-' }}
            </td>

            {{-- Status --}}
            <td>

                @if($p->status == 'tersedia')

                    <span class="badge bg-success">
                        Tersedia
                    </span>

                @else

                    <span class="badge bg-danger">
                        Habis
                    </span>

                @endif

            </td>

            {{-- Tombol Aksi --}}
            <td>

                {{-- Tombol Edit --}}
                <a href="{{ route('products.edit', $p->id) }}"
                   class="btn btn-warning btn-sm">

                    Update

                </a>

                {{-- Tombol Hapus --}}
                <a href="/delete/{{ $p->id }}"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin mau hapus data ini?')">

                    Hapus

                </a>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="8"
                class="text-center">

                Data tidak ada

            </td>

        </tr>

        @endforelse

    </tbody>

</table>

{{-- Pagination --}}
<div class="d-flex justify-content-center">

    {{ $products->links('pagination::bootstrap-5') }}

</div>

@endsection