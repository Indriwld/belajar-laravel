<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>ABSEN KELAS XII RPL 3</h2>
    <ul>
        @foreach ($data as $data2)
            NIS:{{ $data2['NIS'] }}<br>
            Nama :{{ $data2['Nama'] }}<br>
            Jenis kelamin :{{ $data2['Jenis kelamin'] }}<br>
            Kelas:{{ $data2['Kelas'] }}<br>
            Alamat :{{ $data2['Alamat'] }}<br>

            <hr>
        @endforeach
    </ul>
</body>

</html>
