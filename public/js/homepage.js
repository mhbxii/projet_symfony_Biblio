const filterDiv = document.getElementById('filterDiv');
const hamburgerBtn = document.getElementById('hamburgerBtn');
const booklist = document.getElementById('booklist');

let isClicked = false;

hamburgerBtn.addEventListener('click', () => {
    // Toggle visibility of filterDiv
    if (filterDiv.classList.contains('visible')) {
        // Remove styles on second click
        filterDiv.classList.remove('visible');
        booklist.classList.remove('blurred');
        hamburgerBtn.classList.remove('close');
        isClicked = false;
    } else {
        // Apply styles on first click
        filterDiv.classList.add('visible');
        booklist.classList.add('blurred');
        hamburgerBtn.classList.add('close');
    }
});

document.addEventListener('click', (event) => {
    // If the click is outside the filterDiv and the hamburgerBtn, close the filter
    if (!filterDiv.contains(event.target) && !hamburgerBtn.contains(event.target)) {
        filterDiv.classList.remove('visible');
        booklist.classList.remove('blurred');
        hamburgerBtn.classList.remove('close');
    }
});
