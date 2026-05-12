<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color: #f5f6fa;
        }

        .card{
            border: none;
            border-radius: 12px;
        }

        .card-header{
            border-radius: 12px 12px 0 0 !important;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">
                        Tambah Produk
                    </h3>
                </div>

                <div class="card-body">

                    {{-- Alert Error --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">

                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif

                    <form action="{{ route('products.store') }}" method="POST">

                        @csrf

                        {{-- Nama Barang --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Nama Barang
                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="Masukkan nama barang"
                                   required>

                        </div>

                        {{-- Kategori --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Kategori
                            </label>

                            <select name="category_id"
                                    class="form-control"
                                    required>

                                <option value="">
                                    -- Pilih Kategori --
                                </option>

                                @foreach($categories as $category)

                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>

                                @endforeach

                            </select>

                        </div>

                        {{-- Harga --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Harga
                            </label>

                            <input type="number"
                                   name="price"
                                   class="form-control"
                                   placeholder="Masukkan harga"
                                   required>

                        </div>

                        {{-- Stok --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Stok
                            </label>

                            <input type="number"
                                   name="stock"
                                   class="form-control"
                                   placeholder="Masukkan stok"
                                   required>

                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Deskripsi
                            </label>

                            <textarea name="description"
                                      class="form-control"
                                      rows="4"
                                      placeholder="Masukkan deskripsi produk"></textarea>

                        </div>
                        <!-- Status -->
<div class="mb-4">

    <label for="status"
           class="form-label fw-semibold">

        Status Produk

    </label>

    <select name="status"
            id="status"
            class="form-select form-select-lg"
            required>

        <option value="">
            -- Pilih Status --
        </option>

        <option value="tersedia">
            Tersedia
        </option>

        <option value="habis">
            Habis
        </option>

    </select>

</div>

                        {{-- Tombol --}}
                        <div class="d-flex gap-2">

                            <button type="submit"
                                    class="btn btn-success">

                                Simpan Produk

                            </button>

                            <a href="/products"
                               class="btn btn-secondary">

                                Kembali

                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>