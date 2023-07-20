const wrapper = document.querySelector('.wrapper');
const LOGIN = document.querySelector('.LOGIN');
const register = document.querySelector('.register');
const closeBtn = document.querySelector(".close")

register.addEventListener('click', ()=>{
    wrapper.classList.add('active');
})

LOGIN.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
})

closeBtn.addEventListener("click",()=>{
    console.log("clicked");
    window.location.replace("http://localhost/books/index.php")
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