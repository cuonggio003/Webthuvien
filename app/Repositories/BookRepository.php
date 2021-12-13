<?php

namespace App\Repositories;

use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Database\Eloquent\Model;

class BookRepository extends BaseRepository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function create(CreateBookRequest $request)
    {
        $book = new Book();
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
        return $book;

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
    }
}
