// Back to home 

window.onscroll = () => {
    if (window.scrollY > 300) {
        document.getElementById("back-top").style.display = "block";
    } else {
        document.getElementById("back-top").style.display = "none";
    }
}


// slide menu 

var menu = document.getElementById('menu');
var slideMenu = document.getElementById('slide-menu');
menu.addEventListener('click', () => {    
    slideMenu.classList.toggle('active');
});


var sol = document.getElementById('sol');

sol.addEventListener('click',function(){    
    slideMenu.classList.toggle('active');
});


// pop up login div

var logdiv = document.getElementById('login-div');
setTimeout(function(){
    logdiv.style.display = "block";    
},4*1000);

// Close login div
let closePopup = () => {
    logdiv.style.display = "none";
};

// Function to prevent the default scroll behavior
function preventScroll(event) {
    event.preventDefault();
}

logdiv.addEventListener('wheel', preventScroll, { passive: false });