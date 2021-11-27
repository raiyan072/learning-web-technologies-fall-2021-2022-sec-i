function ajax(){
    alert("hello");
	let result = document.getElementById('result').value;
	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', 'calculator.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('result=' + result);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}