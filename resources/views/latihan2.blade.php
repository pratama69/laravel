<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Tabungan</center>
    @foreach($tabungan as $data)
        Nama : {{ $data->nama }}<br>
        Nis  : {{ $data->nis }}<br>
        <hr>

    @endforeach

    foreach($data as $val => $key)
        {
            if ($key['Uang_jajan']>=50000) {
                echo 'Anda Menggunakan Paket A';
            }
            elseif ($key['Uang_jajan']>=25000) {
                echo 'Anda Menggunakan Paket B';
            }
            elseif ($key['Uang_jajan']>=10000) {
                echo 'Anda Menggunakan Paket C';
            }
            else{
                $ta=0;
                $total=$key['Uang_jajan'];
            }
            echo "<br>Nama         :". $key['Nama'].
                 "<br>Nis      :". $key['Kelas'].
                 "<br>Tabungan   :". $key['Uang_jajan'].
                 "<br>Paket Anda :". $ta.
                 "- Uang Total :". $total.
                 "<hr>";
        }
</body>
</html>