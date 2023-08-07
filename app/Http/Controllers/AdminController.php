<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function index()
    {
        $url = url('/register');
        $title = "Admin Registration form";
        $data = compact('url','title');
        return view('admin/registration')->with($data);
    }

    public function store(Request $req)
    {
        //
        echo "<pre>";
        print_r($req->all());
        $admin = new Admin;
        $admin->name = $req -> name;
        $admin->email = $req -> email;
        $admin->BIO = $req -> BIO;
        if($req->hasfile('image')) {
            $file=$req->file("image");
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/admin_image/', $filename);
            $admin->image=$filename;
        }
        $admin->password = Hash::make($req->password);
        $admin->save();
        return redirect('/register');
    }
}
