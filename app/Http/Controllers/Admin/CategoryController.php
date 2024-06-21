<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();

        return view('admin.categorys.index', compact('Categorys'));
    }

    public function create()
    {
        $categorys=Categorie::all();
        return view('admin.categorys.create',compact('Categorys'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'CategoryID' => 'required',
            'CategoryName' => 'required',
        ]);

    $data = $request->all();
    // Xử lý hình ảnh
    // if ($request->hasFile('Image')) {
    //     $image = $request->file('Image');
    //     $imagePath = $image->store('images', 'public');
    //     $data['Image'] = $imagePath;
    // }

    Categorie::create($data);

    return redirect()->route('admin.Categorys.index')->with('success', 'Category created successfully.');
    }

    public function show(Categorie $Category)
    {
        return view('admin.categorys.show',compact('categorys'));
    }

    public function edit(Categorie $Category)
    {
        $categorys=Categorie::all();
        return view('admin.categorys.edit',compact('categorys'));
    }

    public function update(Request $request, Categorie $Category)
    {
        $request->validate([
            'Categoryname' => 'required',
        ]);

        $Category->update($request->all());
        return redirect()->route('admin.Categorys.index')->with('success', 'Category updated successfully.');
    }

    public function delete(Categorie $Category)
    {
        $Category->delete();

        return redirect()->route('admin.Categorys.index')->with('success', 'Category deleted successfully.');
    }
 }
