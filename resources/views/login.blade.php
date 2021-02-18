@extends('layouts.unauth')

@section('content')
    <div class="card mt-4">
        <div class="card-body">
            <form action="{{route('login.authenticate')}}" method="POST">
                @csrf
                <h1>Signin</h1>
                <div class="form-group">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>

                <div class="text-center mt-4">Don't have an account? <a href="{{route('register.show')}}">Sign Up</a></div>
            </form>
        </div>
    </div>
@endsection
