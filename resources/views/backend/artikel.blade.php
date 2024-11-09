@extends('backend.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Artikel Saya</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class="section">
        <div class="card mb-3">
            <div class="card-body">
                <div class="table-responsive col-lg-10">
                    <table id="table" class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="table-primary">
                                <th class="text-center" style="width: 3%">No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artikels as $artikel)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $artikel->judul }}</td>
                                    <td>{{ $artikel->kategori->nama }}</td>
                                    <td><a href="/dashboard/artikel/{{ $artikel->slug }}" class="badge bg-primary"
                                            title="Lihat" style="text-decoration: none"><i class="fa-solid fa-eye"></i></i>
                                        </a>
                                        <a href="/dashboard/artikel/{{ $artikel->slug }}/edit" class="badge bg-warning"
                                            title="Edit" style="text-decoration: none"><i class="fa-solid fa-pen"></i></i>
                                        </a>
                                        <form action="/dashboard/artikel/{{ $artikel->slug }}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Apakah anda yakin?')" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
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
@endsection
