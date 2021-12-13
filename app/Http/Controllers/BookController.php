<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Session;


class BookController extends Controller implements BaseInterface
{
//    protected $bookRepository;
//
//    public function __construct(BookRepository $bookRepository)
//    {
//        $this->bookRepository = $bookRepository;
//    }

    public function index()
    {
//        $books = Book::all();
        $books = Book::latest()->paginate(5);
//        $books = $this->bookRepository->getAll();
        $categories = Category::all();
        return view('books.list', compact('books', 'categories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('books.add', compact('categories'));
    }


    public function store(CreateBookRequest $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->desc = $request->desc;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $book->image = $path;

        }

        $book->status = $request->input('status');
        $book->price = $request->price;
        $book->category_id = $request->category_id;
        $book->save();

        toastr()->success('Thêm sách mới thành công !!');
        return redirect()->route('books.index');
    }


    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();
        return view('books.update', compact('book', 'categories'));
    }


    public function update(UpdateBookRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->name = $request->name;
        $book->desc = $request->desc;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $book->image = $path;

        }

        $book->status = $request->status;
        $book->price = $request->price;
        $book->category_id = $request->category_id;

        $book->save();
        $message = "Cập nhật thành công!";

        toastr()->success('Cập nhật sách thành công !!');
        return redirect()->route('books.index', compact('message'));
    }


    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        $message = "Xóa thành công ";
//        Session::flash('delete-success', $message);
        toastr()->success('Xóa sách thành công !!');
        return redirect()->route('books.index', compact('message'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $bookResult = Book::query()
            ->where('name', 'LIKE', "%{$keyword}%")
            ->get();
        return view('books.search', compact('bookResult'));
    }

    public function showTrashBook()
    {
        $booksDeleted = Book::onlyTrashed()->get();
        return view('books.trash', compact('booksDeleted'));

    }

    public function hardDestroy($id)
    {
       Book::withTrashed()->where('id',$id)->forceDelete();
        toastr()->success("Xóa cứng thành công");
        return redirect()->route('books.trash');
    }

    public function restore($id)
    {

         Book::withTrashed()->where('id',$id)->restore();
         toastr()->success('khôi phục thành công !');
         return redirect()->back();
    }

}
