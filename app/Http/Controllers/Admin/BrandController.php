<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
 
use App\Models\Brand;
use Illuminate\Http\Request;
class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        var_dump($brands);
        return view('admin.brands.index', compact('brands'));
        
    }

    public function create()
    {
        $brands=Brand::all();
        var_dump($brands);
        return view('admin.brands.create',compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'BrandName' => 'required',
        ]);

    $data = $request->all();
    var_dump($request);
    Brand::create($data);
        var_dump($data);
    /*return redirect()->route('admin.brands.')->with('success', 'Brand created successfully.');*/
    }

    /*public function show(Brand $brand)
    {
        return view('admin.brands.show',compact('brands'));
    }*/

    public function edit(Brand $brand)
    {
        $brands=Brand::all();
        return view('admin.brands.edit',compact('brands'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'Brandname' => 'required',

        ]);
        $brand->update($request->all());

        return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully.');
    }

    public function delete(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('admin.brands.index')->with('success', 'Brand deleted successfully.');
    }
 }
