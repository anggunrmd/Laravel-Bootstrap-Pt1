@extends('layout.hello')

@section('container')
<div class="container mt-4">
    <h2>Form Tambah Mahasiswa</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ url('/mahasiswa') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Program Study</label>
            <input type="text" name="jurusan" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <hr>

    <h3>Daftar Mahasiswa</h3>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Program Study</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $index => $mhs)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->jurusan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
