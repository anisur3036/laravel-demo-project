<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <style>
        table {
            border: 1px solid #333;
            border-collapse: collapse;
        }

        table td {
            padding: 2px 3px;
            border: 1px solid #333;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>Name</td>
            <td>Shpping Center</td>
        </tr>
        @foreach ($results as $result)
        <tr>
            <td>{{ $result->name }}</td>
            <td>{{ $result->country->name }}</td>
        </tr>
        @endforeach
    </table>

</html>
