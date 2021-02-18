@extends('layouts.auth')

@section('content')
    <h1>Edit Contact: #{{$contact->id}}</h1>
    @include('contacts.partials.form')
@endsection
