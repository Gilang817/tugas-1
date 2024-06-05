function validateForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('errorMessage');

    errorMessage.textContent = '';

    if (username === '' || password === '') {
        errorMessage.textContent = 'Username and Password are required.';
        return false;
    }

    if (username !== 'user' || password !== 'password') {
        errorMessage.textContent = 'Invalid Username or Password.';
        return false;
    }

    alert('Login successful');
    return true;
} 