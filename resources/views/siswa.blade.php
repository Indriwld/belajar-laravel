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
        @foreach ($siswas as $siswas2)
            id:{{ $siswas2['id'] }}<br>
            nama :{{ $siswas2['nama'] }}<br>
            username :{{ $siswas2['username'] }}<br>
            email:{{ $siswas2['email'] }}<br>
            alamat :{{ $siswas2['alamat'] }}<br>
            mapel :
            @foreach ($siswas2['mapel'] as $siswas3)
                <ul>
                    <ul>
                        <li>{{ $siswas3 }}</li>
                    </ul>
                </ul>

            @endforeach
        @endforeach
    </ul>
</body>

</html>
