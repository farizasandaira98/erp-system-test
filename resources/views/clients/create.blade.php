@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Client</h2>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_client">Nama Client</label>
            <input type="text" class="form-control" id="nama_client" name="nama_client" required>
        </div>
        <div class="form-group">
            <label for="alamat_client">Alamat Client</label>
            <textarea class="form-control" id="alamat_client" name="alamat_client" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="tanggal_mulai_kontrak">Tanggal Mulai Kontrak</label>
            <input type="date" class="form-control" id="tanggal_mulai_kontrak" name="tanggal_mulai_kontrak" required>
        </div>
        <div class="form-group">
            <label for="tanggal_berakhir_kontrak">Tanggal Berakhir Kontrak</label>
            <input type="date" class="form-control" id="tanggal_berakhir_kontrak" name="tanggal_berakhir_kontrak" required>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>
@endsection
