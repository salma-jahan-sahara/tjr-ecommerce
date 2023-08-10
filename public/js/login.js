const title = document.getElementById('title');
const exist = document.getElementById('exist');
const login = document.getElementById('login');
const loginGoogle = document.getElementById('loginGoogle');
const loginFacebook = document.getElementById('loginFacebook');
const existAccount = document.getElementById('existAccount');
const nameField = document.getElementById('nameField');
const hide = document.getElementById('hide');
const termsCondition = document.getElementById('termsCondition');
const register = document.getElementById('register');

login.onclick = function(){
    title.innerHTML = "Sign Up";
    exist.innerHTML = "Already have an account?";
    login.innerHTML = "Sign in here";
    hide.innerHTML = "I read and agree to Terms & Conditions";
    loginGoogle.innerHTML ="Sign up with Google";
    loginFacebook.innerHTML = "Sign up with Facebook";
    existAccount.innerHTML = "OR SIGN UP WITH Email";
    termsCondition.style.display = "none";
    register.innerHTML = "Sign Up";
}