<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning text-dark">
            <h3>Edit Produk</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('products.update', $product->id) }}" method="POST">

                @csrf
                @method('PUT')

                <!-- Nama Produk -->
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ $product->name }}"
                           required>
                </div>

                <!-- Kategori -->
                <div class="mb-3">
                    <label class="form-label">Kategori</label>

                    <select name="category_id"
                            class="form-control"
                            required>

                        @foreach($categories as $category)

                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>

                                {{ $category->name }}

                            </option>

                        @endforeach

                    </select>
                </div>

                <!-- Harga -->
                <div class="mb-3">
                    <label class="form-label">Harga</label>

                    <input type="number"
                           name="price"
                           class="form-control"
                           value="{{ $product->price }}"
                           required>
                </div>

                <!-- Stock -->
                <div class="mb-3">
                    <label class="form-label">Stock</label>

                    <input type="number"
                           name="stock"
                           class="form-control"
                           value="{{ $product->stock }}"
                           required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>

                    <textarea name="description"
                              class="form-control"
                              rows="4">{{ $product->description }}</textarea>
                </div>

                <!-- Status -->
                <div class="mb-4">

                    <label class="form-label">
                        Status Produk
                    </label>

                    <select name="status"
                            class="form-control"
                            required>

                        <option value="tersedia"
                            {{ $product->status == 'tersedia' ? 'selected' : '' }}>
                            Tersedia
                        </option>

                        <option value="habis"
                            {{ $product->status == 'habis' ? 'selected' : '' }}>
                            Habis
                        </option>

                    </select>

                </div>

                <!-- Tombol -->
                <button type="submit"
                        class="btn btn-warning">

                    Update Produk

                </button>

                <a href="/products"
                   class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>