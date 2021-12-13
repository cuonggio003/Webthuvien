<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller implements BaseInterface
{
//    protected $categoryRepository;
//    public function __construct(CategoryRepository $categoryRepository)
//    {
//
//    }

    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view('categories.list', compact('categories'));
    }


    public function create()
    {
        return view('categories.add');
    }


    public function store(CreateCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        $message = "Tạo thể loại sách thành công!";
        toastr()->success('Tạo thể loại mới thành công ');
        return redirect()->route('categories.index', compact('message'));

    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.update', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();
        $message = "Cập nhật thể loại sách thành công!";
        toastr()->success('Sửa thể loại thành công ');
        return redirect()->route('categories.index', compact('message'));

    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $message = "Xóa thể loại sách thành công!";
        toastr()->success('Xóa thể loại thành công ');
        return redirect()->route('categories.index', compact('message'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $categoryResult = Category::query()
            ->where('name', 'LIKE', "%{$keyword}%")
            ->get();
        return view('categories.search', compact('categoryResult'));

    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.detail', compact($category));
    }
}
