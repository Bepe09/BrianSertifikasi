<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anggota</title>
</head>
<body>
    <h1>Anggota</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
            </tr>
            @foreach ($anggotas as $anggota)
                <tr>
                    <td>{{$anggota->id_anggota}}</td>
                    <td>{{$anggota->nama}}</td>
                    <td>{{$anggota->tanggal_lahir}}</td>
                    <td>{{$anggota->alamat}}</td>
                    <td>{{$anggota->nomor_telepon}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
