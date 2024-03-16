<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Notes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #dddddd;
        }

        th, td {
            padding: 8px;
            border: 2px solid #dddddd;
            text-align: center;
        }

        th {
            background-color: orange;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mes Notes</h1>
        <h2>Notes de {{ Auth::user()->name }}</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Matière</th>
                    <th>Note 1</th>
                    <th>Note 2</th>
                    <th>Note 3</th>
                </tr>
            </thead>
            <tbody>
                @if($notes->math)
                <tr>
                    <td>Math</td>
                    @foreach(json_decode($notes->math, true) as $noteArray)
                        @foreach($noteArray as $value)
                            <td>{{ htmlspecialchars($value) }}</td>
                        @endforeach
                    @endforeach
                </tr>
                @else
                    <tr><td>Math</td><td colspan="3">N/A</td></tr>
                @endif

                @if($notes->physique)
                <tr>
                    <td>Physique</td>
                    @foreach(json_decode($notes->physique, true) as $noteArray)
                        @foreach($noteArray as $value)
                            <td>{{ htmlspecialchars($value) }}</td>
                        @endforeach
                    @endforeach
                </tr>
                @else
                    <tr><td>Physique</td><td colspan="3">N/A</td></tr>
                @endif

                @if($notes->anglais)
                <tr>
                    <td>Anglais</td>
                    @foreach(json_decode($notes->anglais, true) as $noteArray)
                        @foreach($noteArray as $value)
                            <td>{{ htmlspecialchars($value) }}</td>
                        @endforeach
                    @endforeach
                </tr>
                @else
                    <tr><td>Anglais</td><td colspan="3">N/A</td></tr>
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>
