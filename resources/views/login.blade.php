@extends('layouts.unauth')

@section('content')
    <div class="card mt-4">
        <div class="card-body">
            <form action="{{route('login.authenticate')}}" method="POST">
                @csrf
                <h1>Signin</h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Password</label>
                    <input type="text" name="password" value="{{old('password')}}" class="form-control"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>

                <div class="text-center mt-4">
                    <a href="{{route('register.show')}}">Don't have an account?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
