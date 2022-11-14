function checkUsername(value){
	const regexExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/gi;
	return( regexExp.test(value) );
}

function check(){
	username = document.getElementById("username");
	pass = document.getElementById("password");
	q0 = document.getElementById("q0");
	q1 = document.getElementById("q1");
	q2 = document.getElementById("q2");
	
	if( !checkUsername(username.value) ){ alert("Please use your email to fill in Username"); return false; }
	if( pass.value == "" ){ alert("Please fill in Password"); return false; }
	if( isNaN(q0.value) ) { alert("Please enter a valid quantity"); return false; }
	if( isNaN(q1.value) ) { alert("Please enter a valid quantity"); return false; }
	if( isNaN(q2.value) ) { alert("Please enter a valid quantity"); return false; }
	
}