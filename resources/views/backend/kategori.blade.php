@extends('backend.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class="section">
        <div class="card mb-3">
            <div class="card-header d-grid d-lg-flex justify-content-lg-end">
                <a href="#" type="button" class="btn btn-primary" onclick="showTambahKategori()"><i
                        class="fa-solid fa-file-circle-plus"></i> Tambah Kategori</a>
            </div>
            <div class="card-body">
                <div class="table-responsive col-lg-6">
                    <table id="table" class="table table-bordered table-stripted">
                        <thead class="thead-dark">
                            <tr class="table-info">
                                <th class="text-center" style="width: 3%">No</th>
                                <th>Kategori</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoris as $kategori)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $kategori->nama }}</td>
                                    <td>{{ $kategori->slug }}</td>
                                    <td>
                                        <a href="/dashboard/kategori/{{ $kategori->id }}/edit" class="badge bg-warning"
                                            title="Edit" style="text-decoration: none"><i class="fa-solid fa-pen"></i>
                                            Edit</a>
                                        <form action="/dashboard/kategori/{{ $kategori->id }}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" onclick="return confirm('Anda yakin?')"
                                                title="Hapus"><i class="fa-solid fa-trash"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal Tambah Kategori --}}
    <div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="tambahKategoriLabek"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDepartemenLabel">Tambah Ketegori</h5>
                    <button type="button" class="btn-close" onclick="$('#tambahKategori').modal('hide')"
                        aria-label="Close"></button>
                </div>
                <form action="/dashboard/kategori" method="post" id="formTambahKategori">
                    @csrf
                    <div class="modal-body">
                        <label for="nama" class="form-label mt-2">Kategori</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            id="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="slug" class="form-label mt-2">Slug :</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
                            id="slug" value="{{ old('slug') }}" required>
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-file-circle-plus"></i>
                            Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function showTambahKategori() {
            $('#tambahKategori').modal('show');
        }
    </script>
@endsection
