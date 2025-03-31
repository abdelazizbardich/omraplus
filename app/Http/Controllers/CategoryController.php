<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Flights Categories",
            "categories" => Category::orderByDesc('id')->get()
        ];
        return view('categories',$data);
    }

    public function save(Request $request){

        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255',
        ]);

        Category::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'slug_en' => Str::slug($request->name_en),
            'slug_ar' => Str::slug($request->name_ar),
            'slug_fr' => Str::slug($request->name_fr),
        ]);

        return redirect()->route('categories')->with('success', 'Category created successfully.');

    }

    public function edit(Category $category){
        $data = [
            "name" => "Edit Category",
            "category" => $category,
            "categories" => Category::orderByDesc('id')->get(),
            "edit" => true
        ];
        return view('categories', $data);
    }

    public function update(Request $request, Category $category){
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'name_fr' => 'required',
        ]);

        $category->update([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'name_fr' => $request->name_fr,
            'slug_en' => Str::slug($request->name_en),
            'slug_ar' => Str::slug($request->name_ar),
            'slug_fr' => Str::slug($request->name_fr),
        ]);

        return redirect()->route('categories')->with('success', 'Category updated successfully.');
    }

    public function delete(Category $category){
        $category->delete();
        return redirect()->route('categories')->with('success', 'Category deleted successfully.');
    }
}
