<!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
   </head>
   <div>
   <body>
    @extends('layout.list114')

    @section('title', 'Ini adalah judul pada meta')
    @section('content')

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['produk'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
   </body>
   </html>
</div>
