<?php
use Illuminate\Support\Facades\Form; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Halooo Ini Crudku lohhh</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('siswa') }}">Laravelkuuu</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('siswa') }}">Melihat Semua Siswa</a></li>
                <li><a href="{{ URL::to('siswa/create') }}">Membuat Siswa</a></li>
            </ul>
        </nav>

        <h1>Semua Siswaku</h1>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>No Hp</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->no_hp }}</td>
                        <td>
                            <a class="btn btn-small btn-success" href="{{ URL::to('siswa/' . $value->id) }}">Tampilkan
                                Siswa Ini</a>
                            <a class="btn btn-small btn-info"
                                href="{{ URL::to('siswa/' . $value->id . '/edit') }}">Edit Siswa Ini</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>