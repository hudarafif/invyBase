<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Supplier;

class AdminController extends Controller
{
    public function addCategory()
    {
        return view('admin.addcategory');
    }

    public function postAddCategory(Request $request)
    {
        $category= new Category();
        $category->category_name=$request->category_name;
        $category->save();
        return redirect()->back();   
    }
    
    public function viewCategory()
    {
        $categories=Category::all();
        return view('admin.viewcategory',compact('categories'));
    }

    public function deleteCategory($id)
    {
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }

    public function editCategory($id)
    {
        $category=Category::findOrFail($id);
        return view('admin.updatecategory',compact('category'));
    }

    public function postUpdateCategory(Request $request, $id)
    {
        $category=Category::findOrFail($id);
        $category->category_name=$request->category_name;
        $category->save();
        return redirect('/viewcategory');
    }

    public function addSupplier()
    {
        return view('admin.addsupplier');
    }

    public function postAddSupplier(Request $request)
    {
        $supplier= new Supplier();
        $supplier->supplier_name=$request->supplier_name;
        $supplier->supplier_address=$request->supplier_address;
        $supplier->save();
        return redirect()->back();   
    }

    public function viewSupplier()
    {
        $suppliers=Supplier::all();
        return view('admin.viewsupplier',compact('suppliers'));
    }
}
