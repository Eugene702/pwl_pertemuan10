<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("index.store") }}" method="POST">
        @csrf
        <label for="nim">NIM</label>
        <input type="text" placeholder="Nim" id="nim" name="nim">

        <label for="nama">NAMA</label>
        <input type="text" placeholder="Nama" id="nama" name="nama">

        <label for="jurusan">Jurusan</label>
        <input type="text" placeholder="Jurusan" id="jurusan" name="jurusan">
        <button type="submit">Tambah mahasiswa</button>
    </form>

    <br>
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->nim }}</td>
                    <td> {{ $row->nama }} </td>
                    <td>{{ $row->jurusan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>