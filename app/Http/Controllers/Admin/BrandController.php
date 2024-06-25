<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Support\Str;
 
use App\Models\Brand;
use Illuminate\Http\Request;
class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
        
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'brandname' => 'required',
        ]);
        $brand =new Brand();
        $brand->brandname = $request->brandname;
        $brand->save();

        return redirect()->route('admin.brands.index')->with('success','');
    }
    public function show(Brand $brand)
    {
        return view('admin.brands.show',compact('brand'));
    }

    public function edit(Brand $brand)
    {
        return view('admin.brands.edit',compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'brandname' => 'required',

        ]);
        $brand->update($request->all());

        return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully.');
    }

    public function destroy(Brand $brand)
    {
            $brand->delete();

        return redirect()->route('admin.brands.index')->with('success', 'Brand deleted successfully.');
    }
 }
