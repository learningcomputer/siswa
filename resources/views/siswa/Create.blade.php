<?php 
use Illuminate\Support\Facades\Form;
?>
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

            <h1>Membuat Siswa</h1>
            <form method="POST" action="{{ URL::to('siswa') }}">
                @csrf
                Nama :<br>
                <input type="text" name="nama">
                <br>
                Alamat :<br>
                <input type="text" name="alamat">
                NO HP :<br>
                <input type="text" name="no_hp">
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>


