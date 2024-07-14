<!-- edit.blade.php -->

<x-app-layout>
    <div class="book-edit-container">
        <h2>Edit Book</h2>
        
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="edit-title">Title</label>
                <input type="text" id="edit-title" name="title" class="edit-form-control" value="{{ $book->title }}" required>
            </div>

            <div class="form-group">
                <label for="edit-author">Author</label>
                <input type="text" id="edit-author" name="author" class="edit-form-control" value="{{ $book->author }}" required>
            </div>

            <div class="form-group">
                <label for="edit-genre">Genre</label>
                <input type="text" id="edit-genre" name="genre" class="edit-form-control" value="{{ $book->genre }}" required>
            </div>

            <div class="form-group">
                <label for="edit-description">Description</label>
                <textarea id="edit-description" name="description" class="edit-form-control" rows="5" required>{{ $book->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="edit-price">Price</label>
                <input type="number" id="edit-price" name="price" class="edit-form-control" value="{{ $book->price }}" required>
            </div>

            <button type="submit" class="edit-btn btn btn-primary">Update Book</button>
        </form>
    </div>
</x-app-layout>
