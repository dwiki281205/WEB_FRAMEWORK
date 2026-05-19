@extends('layouts.main')

@section('content')

<div class="card w-50 mx-auto">

    <div class="card-header">
        <h4>Edit Kategori</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('categories.update', $category->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>Nama Kategori</label>

                <input type="text"
                       name="name"
                       class="form-control"
                       value="{{ old('name', $category->name) }}"
                       required>

            </div>

            <button type="submit"
                    class="btn btn-primary">

                Update

            </button>

            <a href="{{ route('categories.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

@endsection