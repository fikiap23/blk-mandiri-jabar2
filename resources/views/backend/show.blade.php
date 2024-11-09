@extends('backend.layouts.main')

@section('container')
    <section class="section">
        <div class="card my-4">
            <div class="card-body">
                <div class="col-lg-8">
                    <h2 class="mb-3">{{ $artikel->judul }}</h2>

                    <p>Kategori : {{ $artikel->kategori->nama }}</p>

                    <a href="/dashboard/artikel" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                    <a href="/dashboard/artikel/{{ $artikel->slug }}/edit" class="btn btn-warning" style="color: white"><i
                            class="fa-solid fa-pen"></i>
                        Edit</a>
                    <form action="/dashboard/artikel/{{ $artikel->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i
                                class="fa-solid fa-trash"></i> Hapus</button>
                    </form>

                    <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="" class="img-fluid my-3">

                    @if ($artikel->sumber_gambar)
                        <p style="font-style: italic; font-size: 14px">Sumber : <a href="{{ $artikel->sumber_gambar }}"
                                target="_blank">
                                {{ $artikel->sumber_gambar }}</a></p>
                    @endif

                    <p>{!! $artikel->body !!}</p>

                    @if ($artikel->sumber)
                        <p style="font-style: italic; font-size: 14px">Sumber : {{ $artikel->sumber }}</p>
                    @endif


                </div>
            </div>
        </div>
    </section>
@endsection
