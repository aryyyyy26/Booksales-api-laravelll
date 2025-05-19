<!DOCTYPE html>
<html>
<head>
    <title>Daftar Genres</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h1>Daftar Genres</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre['id'] }}</td>
                    <td>{{ $genre['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
