<html>
<head>
    <title>Data kategori</title>
</head>
<body>

<h3>Data kategori</h3>

<table border="1" width="100%">
    <thead>
    <tr>
        <th style="text-align: left">No</th>
        <th style="text-align: left">Nama kategori</th>
    </tr>
    </thead>
    <tbody>
    @php
    $no =1;
    @endphp
    @foreach($kategori as $row)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->nama_kategori}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
