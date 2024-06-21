@extends('layouts.adminlayout')

@section('title', 'Product Index')

@section('content')
    <div class="container">
        <h1>Product List</h1>
        
        <h2>Categories</h2>
        <ul>
             @foreach($categories as $category)
                    <li>{{ $category->name }}</li>
            @endforeach 
        </ul>
        
        <h2>Products</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
