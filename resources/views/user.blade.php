<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<body>
    <table border="1" cellpadding="2" cellspacing="0">
        {{-- <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
        </tr> --}}
        {{-- @foreach ($users as $user)
        <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->level_id }}</td>
        </tr>
    @endforeach --}}

    <tr>
        <th>Jumlah Pengguna</th>
    </tr>
    <tr>
        <td>{{ $userCount }}</td>
    </tr>
    </table>
    
</body>
</html>