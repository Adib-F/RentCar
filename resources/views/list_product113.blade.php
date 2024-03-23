@extends('layout.list')

@section('title', 'Rentcang')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Harga</th>
        </tr>
    <thead>
    <tbody>
        @foreach($product as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['product'] }}</td>
                <td>{{ $post['harga'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection