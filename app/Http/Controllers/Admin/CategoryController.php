<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function listCategory()
    {
        $listCategory = Category::paginate(8);
        return view('admin.category.list-category')->with([
            'category' => $listCategory
        ]);
    }

    public function addCategory()
    {
        return view('admin.category.add-category');
    }

    public function addPostCategory(Request $req)
    {
        $data = [
            'name' => $req->nameCategory
        ];
        Category::create($data);
        return redirect()->route('admin.category.listCategory')->with([
            'message' => 'Thêm thành công danh mục mới!'
        ]);
    }

    public function deleteCategory(Request $req)
    {
        $category = Category::find($req->idCategory);

        $category->delete();
        return redirect()->back()->with([
            'message' => 'Xoá thành công!'
        ]);
    }

    public function detailCategory($idCategory)
    {
        $category = Category::where('category_id', $idCategory)->first();
        return view('admin.category.detail-category')->with([
            'category' => $category
        ]);
    }

    public function editCategory($idCategory)
    {
        $category = Category::where('category_id', $idCategory)->first();
        return view('admin.category.edit-category')->with([
            'category' => $category
        ]);
    }

    public function editPatchCategory(Request $req, $idCategory)
    {
        $category = Category::where('category_id', $idCategory)->first();

        $data = [
            'name' => $req->nameCategory,
        ];
        Category::where('category_id', $idCategory)->update($data);
        return redirect()->route('admin.category.listCategory')->with([
            'message' => 'Sửa thành công danh mục!'
        ]);
    }
}
