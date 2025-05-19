<!DOCTYPE html>
<html>
<head>
    <title>Daftar Author</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Author</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author['id'] ?? $author->id }}</td>
                    <td>{{ $author['name'] ?? $author->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
