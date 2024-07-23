@extends('template')

@section('main')
    <h1>Ini Halaman Table</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th></th>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
