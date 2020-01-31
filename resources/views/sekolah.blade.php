<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Pendaftaran</center>
    @foreach($daftar as $data)
        NIS : {{ $data->nis }}<br>
        Nama  : {{ $data->nama }}<br>
        Kelas  : {{ $data->kelas }}<br>
        Alamat  : {{ $data->alamat }}<br>
        Jenis Kelamin  : {{ $data->jns_kel }}<br>
        Tanggal Lahir  : {{ $data->tgl_lahir }}<br>
        Umur  : {{ $data->umur }}<br>
        <hr>

    @endforeach
</body>
</html>