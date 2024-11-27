const showPasswordCheckbox = document.getElementById('show_password');
const passwordField = document.getElementById('user_password');

showPasswordCheckbox.addEventListener('click', function() {
    const currentType = passwordField.getAttribute('type');
    passwordField.setAttribute(
        'type',
        currentType === 'password' ? 'text' : 'password'
    );
});