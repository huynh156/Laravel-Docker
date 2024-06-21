<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
 
use App\Models\Product;
use App\Models\Brand;
use App\Models\Categorie;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index()
    {
        $categories=Categorie::all();
        $products = Product::all();
        $brands = Brand::all();

        return view('admin.products.index', compact('products','categories','brands'));
    }

    public function create()
    {
        $brands=Brand::all();
        $categories=Categorie::all();
        return view('admin.products.create',compact('categories','brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ProductName' => 'required',
            'Brand' => 'required',
            'Category' => 'required',
            'Price' => 'required|numeric',
            'Quantity' => 'required|numeric',
            'Description' => 'required',
            'Image' => 'required|image',
        ]);

    $data = $request->all();
    // Xử lý hình ảnh
    // if ($request->hasFile('Image')) {
    //     $image = $request->file('Image');
    //     $imagePath = $image->store('images', 'public');
    //     $data['Image'] = $imagePath;
    // }

    Product::create($data);

    return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('admin.products.show',compact('products','categories','brands'));
    }

    public function edit(Product $product)
    {
        $brands=Brand::all();
        $categories=Categorie::all();
        return view('admin.products.edit',compact('products','categories','brands'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product->update($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
 }
