
function viewBook(element) {
    // Retrieve the data-book attribute and parse it into a JavaScript object
    const bookData = JSON.parse(element.getAttribute('data-book'));

    // Store the book data in localStorage
    localStorage.setItem('selectedBook', JSON.stringify(bookData));

    // Redirect to the viewbook page
    window.location.href = '/viewbook'; // Adjust the URL if necessary
}
