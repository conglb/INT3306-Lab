window.onload = function(){
	
	
	
//const namne = document.getElementById('fullname').blur = function(event) {
//	console.log(event)
//}
//const password = document.querySelector('input[type="password"]');
//password.addEventListener('focus', (event) => {
//  event.target.style.background = 'pink';    
//});
/*
name.addEventListener('blur', (event) => {
	console.log(name)
	event.target.style.background = 'green';
	value = event.value
	value = value.trim()
	event.value = value
});
*/



const name = document.querySelector('input[type="text"]');
name.addEventListener('blur', (event) => {
	console.log(name.value)
	//event.target.style.background = 'green';
	value = name.value
	value = value.trim()
	name.value = value 
});





}