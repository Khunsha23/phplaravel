<!-- resources/views/books/index.blade.php -->

<x-app-layout>
    <div class="text-right mb-4">
        <a href="{{ route('books.create') }}" class="btn-action">New Book</a>
    </div>
    
    <h2 style="    margin-bottom: 2em;">All Books</h2>
    <div class="books-container">
        @foreach($books as $book)
            <div class="book">
                <h3>{{ $book->title }}</h3>
                <p>Author: {{ $book->author }}</p>
                <p>Genre: {{ $book->genre }}</p>
                <p>Description: {{ $book->description }}</p>
                <p>Price: ${{ $book->price }}</p>
                <div class="book-actions">
                    <a href="{{ route('books.show', $book->id) }}" class="btn-action">View</a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn-action">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-action delete">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>


        {{ $books->links() }}


</x-app-layout>
