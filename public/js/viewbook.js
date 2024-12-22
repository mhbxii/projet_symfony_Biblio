document.addEventListener('DOMContentLoaded', () => {
    // Retrieve the selected book from localStorage
    const book = JSON.parse(localStorage.getItem('selectedBook'));

    if (!book) {
        alert('No book selected!');
        window.location.href = '/booklist'; // Adjust to your booklist route
        return;
    }

    // Populate the book details
    document.getElementById('mainImage').src = `/images/books/${book.image || 'default.jpg'}`;
    document.getElementById('mainImage').alt = book.title || 'Book Image';

    document.getElementById('bookTitle').textContent = book.title || 'Unknown Title';
    document.getElementById('bookPrice').textContent = `${book.price || '0.00'} TND`; // Customize as needed
    document.getElementById('bookAuthor').textContent = book.createdBy || 'Unknown Author';
    document.getElementById('bookDescription').textContent = book.description || 'No description available';

    // Add event listener for "Add To Cart" button
    document.getElementById('buyNowButton').addEventListener('click', () => {
        alert(`Added ${book.title || 'this book'} to your cart!`);
        // Implement further cart logic if needed
    });
});
