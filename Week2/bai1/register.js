fullname = document.querySelector('input[name="fullname"]');
fullname.addEventListener('blur', (event) => {
    capitalizeFLetter(event.target.value)
});


function capitalizeFLetter(x) {
    if(x !== "") {
        fullname.value = x.replace(/^./, x[0].toUpperCase());
    }
    
} 


function enterEvent(e) {
    if(e.keyCode === 13) {
        console.log(this);
    }
}


