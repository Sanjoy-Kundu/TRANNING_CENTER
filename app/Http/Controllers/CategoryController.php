<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'category_name' => "required||unique:categories,category_name",
       ],[
        "category_name.required" => "Category Name is required",
        'category_name.unique' => "Category Name already taken",
       ]);

      $categoryId =  Category::insertGetId($request->except('_token') + [
        'created_at' => Carbon::now(),
       ]);

               //first calculate image start
               if($request->hasFile("category_image")){
                $imageName =$categoryId."-"."category-".Str::lower(Str::random(20)).".".$request->file("category_image")->extension();
                $imagePath = "uploads/category/".$imageName;
                Image::make($request->file("category_image"))->resize(400, 400)->save($imagePath);

                //update database
                Category::find($categoryId)->update([
                    "category_image" => $imageName,
                ]);
             //update database
            }
        //first calculate image start
        return back()->withSuccess('Category Inserted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category_details = Category::find($id);
        return view('backend.category.view', compact('category_details'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        //
        $singleCategory =  Category::find($id);
        return view('backend.category.edit', compact('singleCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
