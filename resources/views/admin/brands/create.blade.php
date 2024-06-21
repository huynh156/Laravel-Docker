@extends('layouts.adminlayout')

@section('title', 'Create brand')

@section('content')
    <div class="container">
        <h1>Create brand</h1>
        @php
            var_dump(route('admin.brands.store'));
        @endphp
        <form action="{{ route('admin.brands.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">brand Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection