<!DOCTYPE html>
<html>
<head>
    <title>Daftar Books</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h1><strong>Daftar Buku</strong></h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Author</th>
            <th>Genre</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->genre->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
