@extends('layouts.unauth')

@section('content')
    <div class="card mt-4">

        <div class="card-body">
            <h1>Registration</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('register.signup')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control"/>

                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password"  name="password" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="password_confirmation " class="form-label">Confirm Password</label>
                    <input type="password" id="password_confirmation"  name="password_confirmation" class="form-control"/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="text-center mt-4">
                    <a href="{{route('login')}}">Already have an account?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
