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
            'name' => 'required',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
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
            'name' => 'required',
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->route('categories')->with('success', 'Category updated successfully.');
    }

    public function delete(Category $category){
        $category->delete();
        return redirect()->route('categories')->with('success', 'Category deleted successfully.');
    }
}
