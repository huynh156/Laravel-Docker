@extends('layouts.adminlayout')

@section('title', 'Brand Index')

@section('content')
    <div class="container">
        <h1>Brand List</h1>
        
        @if($brands->isEmpty())
            <p>No brands found</p>
        @else
            <h2>Brands</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{ $brand->BrandID }}</td>
                            <td>{{ $brand->BrandName }}</td> <!-- Ensure 'BrandName' is the correct attribute -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
