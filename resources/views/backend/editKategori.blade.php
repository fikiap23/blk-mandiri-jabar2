@extends('backend.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Kategori</h1>
    </div>
    <section class="section">
        <div class="card mb-3">
            <form action="/dashboard/kategori/{{ $kategori->id }}" method="post">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="col-lg-4 mb-3">
                        <label for="nama" class="form-label">Ketegori :</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder=""
                            name="nama" id="nama" value="{{ old('nama', $kategori->nama) }}" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                Harus diisi
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="slug" class="form-label">Slug :</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder=""
                            name="slug" id="slug" value="{{ old('slug', $kategori->slug) }}" required>
                        @error('slug')
                            <div class="invalid-feedback">
                                Harus diisi
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer d-grid d-lg-flex justify-content-lg-end">
                    <button type="submit" class="btn btn-warning" style="color: white"> <i class="fa-solid fa-pen"></i>
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
