<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman Anda</title>
</head>
<body>
    <!-- Konten Anda di sini -->

    <h1>Selamat datang di website saya!</h1>


      <table border="1">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket->name }}</td>
                <td>{{ $ticket->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

