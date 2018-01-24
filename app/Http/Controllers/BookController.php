<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return $books;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBookRequest $request)
    {
        $book = new Book();
        $book->fill($request->only('title', 'author', 'edition'));
        $book->save();

        return $book;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return $book;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {

        // only save the field if it is not null
        $fields = collect(['title', 'author', 'edition']);

        $fields->each(function($item, $key) use ($book, $request) {
            if (!is_null($request->{$item})) {
                $book->{$item} = $request->{$item};
            }
        });
        
        $book->save();

        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
    }
}
