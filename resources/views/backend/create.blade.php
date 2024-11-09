@extends('backend.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Artikel</h1>
    </div>
    <section class="section">
        <div class="card mb-3">
            <div class="col">
                <form action="/dashboard/artikel" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="col-lg-6 mb-3">
                            <label for="judul" class="form-label">Judul :</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" placeholder=""
                                name="judul" id="judul" value="{{ old('judul') }}" required autofocus>
                            @error('judul')
                                <div class="invalid-feedback">
                                    Judul harus diisi
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="slug" class="form-label">Slug :</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder=""
                                name="slug" id="slug" value="{{ old('slug') }}" readonly>
                            @error('slug')
                                <div class="invalid-feedback">
                                    Slug harus diisi
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="kategori" class="form-label">Kategori :</label>
                            <select name="kategori_id" id="kategori" class="form-select">
                                @foreach ($kategoris as $kategori)
                                    @if (old('kategori_id') === $kategori->id)
                                        <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                                    @else
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="gambar" class="form-label">Gambar artikel :</label>
                            <img class="gambar-preview img-fluid mb-3 col-sm-6">
                            <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar"
                                name="gambar" onchange="previewGambar()">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    Gambar tidak boleh lebih dari 2 mb
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="sumber_gambar" class="form-label">Sumber gambar :</label>
                            <input type="text" class="form-control" placeholder="" name="sumber_gambar"
                                id="sumber_gambar" value="{{ old('sumber_gambar') }}">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body :</label>
                            @error('body')
                                <p class="text-danger">Body harus diisi</p>
                            @enderror
                            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                            <trix-editor input="body"></trix-editor>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="sumber" class="form-label">Sumber :</label>
                            <input type="text" class="form-control" placeholder="" name="sumber" id="sumber"
                                value="{{ old('sumber') }}">
                        </div>
                    </div>

                    <div class="card-footer d-grid d-lg-flex justify-content-lg-end">
                        <button type="submit" class="btn btn-primary"> <i class="fa-solid fa-file-circle-plus"></i> Buat
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
            fetch('/dashboard/artikel/create/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewGambar() {
            const gambar = document.querySelector('#gambar');
            const gambarPreview = document.querySelector('.gambar-preview');

            gambarPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent) {
                gambarPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
