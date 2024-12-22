document.getElementById('loginForm').addEventListener('submit', function (e) {
    let isValid = true;

    const emailInput = document.getElementById('email');
    const pwdInput = document.getElementById('pwd');

    // Email validation
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(emailInput.value)) {
        emailInput.style.borderColor = 'red';
        emailInput.placeholder = 'Invalid email!';
        isValid = false;
    } else {
        emailInput.style.borderColor = '';
    }

    // Password validation
    if (!pwdInput.value) {
        pwdInput.style.borderColor = 'red';
        pwdInput.placeholder = 'Password cannot be empty!';
        isValid = false;
    } else {
        pwdInput.style.borderColor = '';
    }

    // If invalid, prevent form submission
    if (!isValid) {
        e.preventDefault();
    }
});
