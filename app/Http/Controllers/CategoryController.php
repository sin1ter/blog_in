<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $url = url('/category');
        $title = "Category form";
        $data = compact('url', 'title');
        return view('admin/category')->with($data);
    }
    public function store(Request $req) 
    {
        echo "<pre>";
        print_r($req->all());
        $category = new Category;
        $category->category_name = $req -> category_name;
        $category->save();
        return redirect('/category');
    }
}
