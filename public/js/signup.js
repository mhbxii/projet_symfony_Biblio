document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the form from submitting immediately
    // Basic form validation
    let isValid = true;
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    
    // Validate username
    if (!username.value) {
        username.style.borderColor = 'red';
        username.placeholder = 'Username must not be empty!';
        isValid = false;
    } else {
        username.style.borderColor = 'green';
    }

    // Validate email (simple regex)
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!email.value || !emailRegex.test(email.value)) {
        email.style.borderColor = 'red';
        email.placeholder = 'Invalid email format!';
        isValid = false;
    } else {
        email.style.borderColor = 'green';
    }

    // Validate password
    if (!password.value) {
        password.style.borderColor = 'red';
        password.placeholder = 'Password must not be empty!';
        isValid = false;
    } else {
        password.style.borderColor = 'green';
    }

    // Validate password confirmation
    if (password.value !== confirmPassword.value) {
        confirmPassword.style.borderColor = 'red';
        confirmPassword.placeholder = 'Passwords do not match!';
        isValid = false;
    } else {
        confirmPassword.style.borderColor = 'green';
    }

    // If everything is valid, submit the form
    if (isValid) {
        // Submit the form if all validation passed
        alert("mrigl");
        document.getElementById('signupForm').submit();
    }
});
