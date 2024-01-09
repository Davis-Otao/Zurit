<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(){
        $this->middleware('permission:book-create', ['only' => ['create','store']]);
        $this->middleware('permission:book-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:book-delete', ['only' => ['destroy']]);
    }

    public function create(): View
    {
        return view('books.create');
    }

    public function edit(Book $book): View
    {
        return view('books.edit', compact('book'));
    }

    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'book_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'book_name' => 'required',
        'description' => 'required',
        'current_price' => 'required|numeric',
        'previous_price' => 'required|numeric',
    ]);

    $imageName = ''; // Initialize image name variable

    // Handle file upload
    if ($request->hasFile('book_image')) {
        $image = $request->file('book_image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('books_res/img'), $imageName);
    }

    // Create book with file path
    Book::create([
        'book_image' => $imageName,
        'book_name' => $request->input('book_name'),
        'description' => $request->input('description'),
        'current_price' => $request->input('current_price'),
        'previous_price' => $request->input('previous_price'),
    ]);

    return redirect()->route('books_admindash')->with('success', 'Book added successfully.');
}

public function update(Request $request, Book $book): RedirectResponse{
    $request->validate([
        'book_image' => 'required', 
        'book_name' => 'required',
        'description' => 'required',
        'current_price' => 'required|numeric',
        'previous_price' => 'required|numeric',
    ]);

    // Handle the book image upload
    $book_image = $book->book_image;
    if($request->hasFile('book_image')) {
        // Delete the old image from storage
        Storage::delete('public/'.$book->book_image);

        // Upload the new image
        $book_image = $request->book_image->store('img', 'public');
    }

    // Update book details
    $book->update([
        'book_image' => $book_image,
        'book_name' => $request->input('book_name'),
        'description' => $request->input('description'),
        'current_price' => $request->input('current_price'),
        'previous_price' => $request->input('previous_price'),
    ]);

    return redirect()->route('books')->with('success', 'Book updated successfully');
}

    // Other methods like index, show, and destroy...

    public function index()
    {
        // Retrieve books data from the database
        $books = Book::all();

    // Return the 'books' view and pass the $books variable to it
    return view('books', compact('books'));
    }
    

}
