@extends('layouts.auth')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Add Contact</h1>
            @include('contacts.partials.form')
        </div>
    </div>
@endsection
