<html lang="en">
<head><meta charset="UTF-8">
<meta name="viewport" content="width">
<link rel="stylesheet" type="text/css" href="{{ asset('') }}">
</head>
<body bgcolor=>
@extends('masterview')
@section('halamanasli')
    <table border=1 style="width:100%">
        <thead>
            <th>Id</th>
            <th>Nama Pelapor</th>
            <th>Jenis laporan</th>
            <th>Email Pelapor</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Laporan</th>
        <thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->nama_pelapor }}</td>
                <td>{{ $d->jenis_laporan }}</td>
                <td>{{ $d->email_pelapor }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->kota }}</td>
                <td>{{ $d->laporan }}</td>                
             </tr>
                @endforeach
               
            </tbody>
            </table>
            <li><a href ="/">CLOSE<a>
            </body>
            </html>
            @endsection