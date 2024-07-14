<!-- show.blade.php -->

<x-app-layout>
    <div class="book-show-container">
        <h2>{{ $book->title }}</h2>
        <div class="book-details">
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Genre:</strong> {{ $book->genre }}</p>
            <p><strong>Description:</strong> {{ $book->description }}</p>
            <p><strong>Price:</strong> ${{ $book->price }}</p>
        </div>
        <div class="book-actions">
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit Book</a>
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Book</button>
            </form>
        </div>
    </div>
</x-app-layout>
