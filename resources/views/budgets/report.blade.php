<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laporan Budgets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Laporan Budgets</h1>
    <table>
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($budgets as $budget)
            <tr>
                <td>{{ $budget->description }}</td>
                <td>{{ $budget->amount }}</td>
                <td>{{ $budget->date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
