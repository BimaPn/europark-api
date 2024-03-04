<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Report</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
    body {
 font-family: "Roboto", sans-serif;
}
.title-container {
text-align:center;
margin-bottom: 34px;
}
.title {
display: block;
font-weight : 500;
font-size: 28px;
}
table {
            width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
padding:0;
margin:0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        /* Style untuk header tabel */
        th {
            background-color: #36304a;
            color: white;
            font-weight: 500;
padding-top: 8px;
padding-bottom: 8px;
padding-left:8px;
            text-align: left;
font-size: 14px;
        }
td {
            padding: 6px 0px;
padding-left:8px;
            text-align: left;
            border-bottom: 1px solid #f2f2f2;

font-size: 14px;
        }
.visit-date {
width:15%;
}

        /* Style untuk baris genap */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Hover style untuk baris */
        tr:hover {
            background-color: #ddd;
        }
 </style>
</head>
<body>
    <div class="title-container">
        <span class="title">Laporan Pembelian Tiket Museum</span>
        <span class="title">{{ $message }}</span>
    </div>
      <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th class="visit-date">Tgl.Kunjungan</th>
                <th>Jadwal</th>
                <th>Kadaluarsa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket->name }}</td>
                <td>{{ $ticket->email }}</td>
                <td>{{ $ticket->visit_date }}</td>
                <td>{{ $ticket->schedule->schedule }}</td>
                <td>{{ $ticket->checkExpired() ? "Sudah" : "Belum" }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

