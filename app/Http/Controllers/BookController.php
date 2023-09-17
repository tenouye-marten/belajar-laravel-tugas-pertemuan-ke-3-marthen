<?php


namespace App\Http\Controllers;

use App\Models\book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = book::orderBy('created_at', 'DESC')->get();
        return view("pages.book.index", compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.book.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

         Book::create($request->all());

         return redirect()->route('book.index')->with('success' , 'book addes sucsesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        return view('pages.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('pages.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);
        $book -> update($request->all());
        return redirect()->route('book.index')->with('success' , 'book Updated sucsesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book -> delete();
        return redirect()->route('book.index')->with('success' , 'book deleted sucsesfully');
    }
}
