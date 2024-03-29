<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=Book::all();
        return view("book.index",compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("book.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->input("name");
        $age=$request->input("age");
        $genre=$request->input("genre");
        $book=new Book;
        $book->name=$name;
        $book->age=$age;
        $book->genre=$genre;
        $book->save();
        return redirect()->route("book.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view("book.show",compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $name=$request->input('name');
        $age=$request->input('age');
        $genre=$request->input('genre');
        $book->name=$name;
        $book->age=$age;
        $book->genre=$genre;
        $book->update();
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        redirect()->route("book.index");
    }

// autre methde de destroy (delete):
    //      public function destroy($id)
    //      {
        //     $book=Book::find($id);
        //     $book->delete();
        //     redirect()->route("book.index");
    //      }
}
