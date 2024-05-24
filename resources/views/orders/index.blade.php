@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Add Order</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Client</th>
                <th>Nama Item</th>
                <th>Harga Item</th>
                <th>Tanggal Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->client->nama_client }}</td>
                    <td>{{ $order->nama_item }}</td>
                    <td>{{ $order->harga_item }}</td>
                    <td>{{ $order->tanggal_order }}</td>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('orders.pdf', $order->id) }}" class="btn btn-info">PDF</a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline-block;">
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
