<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes des Enfants</title>
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
        <h1>Notes des Enfants</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Enfant</th>
                    <th>Matière</th>
                    <th>Note 1</th>
                    <th>Note 2</th>
                    <th>Note 3</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notesEtudiants as $etudiantId => $note)
                    <tr>
                        <td>{{ $etudiantId }}</td>
                        <td>Math</td>
                        <td>{{ $note->math ? json_decode($note->math)->math[0] : 'N/A' }}</td>
                        <td>{{ $note->math ? json_decode($note->math)->math[1] : 'N/A' }}</td>
                        <td>{{ $note->math ? json_decode($note->math)->math[2] : 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Physique</td>
                        <td>{{ $note->physique ? json_decode($note->physique)->physique[0] : 'N/A' }}</td>
                        <td>{{ $note->physique ? json_decode($note->physique)->physique[1] : 'N/A' }}</td>
                        <td>{{ $note->physique ? json_decode($note->physique)->physique[2] : 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Anglais</td>
                        <td>{{ $note->anglais ? json_decode($note->anglais)->anglais[0] : 'N/A' }}</td>
                        <td>{{ $note->anglais ? json_decode($note->anglais)->anglais[1] : 'N/A' }}</td>
                        <td>{{ $note->anglais ? json_decode($note->anglais)->anglais[2] : 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
