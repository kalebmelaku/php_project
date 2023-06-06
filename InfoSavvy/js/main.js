const signup = document.querySelector('#signup');
const login = document.querySelector('#login');
const loginForm = document.querySelector('.login-form');
const signupForm = document.querySelector('.signup-form');
const title = document.querySelector('.modal-title');
const account = document.querySelector('.account');
signup.addEventListener('click', () => { 
    loginForm.classList.add('d-none');
    signupForm.classList.remove('d-none');
    if (loginForm.classList.contains('d-none')) {
        title.innerHTML = 'Sign Up';
    }
})

login.addEventListener('click', (e) =>{
    loginForm.classList.remove('d-none');
    signupForm.classList.add('d-none');
    if (signupForm.classList.contains('d-none')) {
        title.innerHTML = 'Login';
    }
})