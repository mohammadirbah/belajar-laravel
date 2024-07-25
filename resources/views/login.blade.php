@extends('template')

@section('login')
    <form>
        <div class="form-group mt-5">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Input Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Input Password">
        </div>

        <button type="submit" class="btn btn-primary">Log in</button>
    </form>
@endsection
