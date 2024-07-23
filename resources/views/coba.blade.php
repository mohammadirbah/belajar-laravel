<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Coba</title>
</head>

<body>
    @extends('template')

    @section('main')
        <h2>Ini Halaman Coba</h2>

        @for ($i = 1; $i <= 10; $i++)
            @if ($i % 2)
                <h2>ini perulangan menggunakan blade</h2>
            @endif
        @endfor

        @php
            $no = 2;
            echo $no;
        @endphp

        <img src="{{ asset('img/contoh.jpg') }}" width="400" alt="">
    @endsection
</body>

</html>
