@extends('layouts.auth')

@section('content')
    <h1>Contacts</h1>
    @include('contacts.partials.search-input')
    @include('contacts.partials.list')
@endsection
