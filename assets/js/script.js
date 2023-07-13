const wrapper = document.querySelector('.wrapper');
const LOGIN = document.querySelector('.LOGIN');
const register = document.querySelector('.register');



register.addEventListener('click', ()=>{
    wrapper.classList.add('active');
})

LOGIN.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
})





function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    }
    else {
        x.type = "password";
    }
}

