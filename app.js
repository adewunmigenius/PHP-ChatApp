var x = document.getElementById('name').value; 
var y = document.getElementById('entmsg').value;


function validate(){
	if(x == "" && y ==""){
		document.getElementsByName('submit').disabled = true;
	}
}
