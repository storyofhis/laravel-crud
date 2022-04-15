@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Mahasiswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa *</label>
                            <input type="text" name="nama" class="form-control" placeholder="John Cenna" />
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM *</label>
                            <input type="number" name="nim" class="form-control" placeholder="1234"/>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat *</label>
                            <textarea type="text" name="alamat" class="form-control" placeholder="alamat"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}">Kembali Ke Halaman Utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection