@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Order</h2>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="client_id">Nama Client</label>
            <select class="form-control" id="client_id" name="client_id" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->nama_client }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama_item">Nama Item</label>
            <input type="text" class="form-control" id="nama_item" name="nama_item" required>
        </div>
        <div class="form-group">
            <label for="harga_item">Harga Item</label>
            <input type="number" class="form-control" id="harga_item" name="harga_item" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="tanggal_order">Tanggal Order</label>
            <input type="date" class="form-control" id="tanggal_order" name="tanggal_order" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
