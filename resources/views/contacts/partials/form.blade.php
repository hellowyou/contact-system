<?php
    $editing = isset($contact);
    $model = $contact ?? optional();
?>
<form action="{{$editing ? route('contacts.update', $contact) : route('contacts.store') }}" method="POST">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf

    @if($editing)
        <input name="_method" type="hidden" value="PUT">
    @endif

    <div class="form-group">
        <label for="name" class="form-label" required>Name</label>
        <input type="text" class="form-control" value="{{old('name', $model->name)}}" id="name" name="name">
    </div>

    <div class="form-group">
        <label for="company" class="form-label">Company</label>
        <input type="text" class="form-control" value="{{old('company', $model->company)}}" id="company" name="company">
    </div>

    <div class="form-group">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" value="{{old('phone', $model->phone)}}" id="phone" name="phone">
    </div>

    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" value="{{old('email', $model->email)}}" id="email" name="email">
    </div>

    <div class="form-group">
        <button class="btn btn-default" type="submit">Submit</button>
    </div>
</form>
