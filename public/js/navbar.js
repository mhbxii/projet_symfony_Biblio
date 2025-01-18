// Get user data from localStorage
function getUserData() {
    const userData = localStorage.getItem('userData');
    return userData ? JSON.parse(userData) : null;
}

// Go to login page
function goToLogin() {
    window.location.href = '/login';
}

// Redirect to add article
function goToAddArticle() {
    const userData = getUserData();
    if (userData && userData.isLoggedIn) {
        window.location.href = '/addbook';
    } else {
        alert('Login First!!');
    }
}

// Profile click action
function onProfileClick(userId) {
    window.location.href = `/profile/${userId}`;
}

// Log out
function logout() {
    localStorage.removeItem('userData');
    window.location.href = 'login';
}

function goTo(url){
    window.location.href = url;
}