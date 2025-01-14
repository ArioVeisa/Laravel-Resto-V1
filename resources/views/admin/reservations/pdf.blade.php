<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Reservations</h1>
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Reservation Date</th>
                <th>Table</th>
                <th>Guest No.</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->tel_number }}</td>
                    <td>{{ $reservation->res_date }}</td>
                    <td>{{ $reservation->table->name }}</td>
                    <td>{{ $reservation->guest_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
