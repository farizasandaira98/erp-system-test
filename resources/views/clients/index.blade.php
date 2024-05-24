@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('clients.create') }}" class="btn btn-primary">Add Client</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Client</th>
                <th>Alamat Client</th>
                <th>Tanggal Mulai Kontrak</th>
                <th>Tanggal Berakhir Kontrak</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $client->nama_client }}</td>
                    <td>{{ $client->alamat_client }}</td>
                    <td>{{ $client->tanggal_mulai_kontrak }}</td>
                    <td>{{ $client->tanggal_berakhir_kontrak }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
