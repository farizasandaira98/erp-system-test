<!DOCTYPE html>
<html>
<head>
    <title>Order PDF</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Order Details</h2>
        <table class="table">
            <tr>
                <th>Nama Client</th>
                <td>{{ $order->client->nama_client }}</td>
            </tr>
            <tr>
                <th>Nama Item</th>
                <td>{{ $order->nama_item }}</td>
            </tr>
            <tr>
                <th>Harga Item</th>
                <td>{{ $order->harga_item }}</td>
            </tr>
            <tr>
                <th>Tanggal Order</th>
                <td>{{ $order->tanggal_order }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
