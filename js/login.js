function printDiv() {
	var divContents = document.getElementById("download").innerHTML;
	var a = window.open('', '', 'height=500, width=500');
	a.document.write('<html>');
    a.document.write('<body >');
    a.document.write(divContents);
    a.document.write('</body></html>');
    a.document.close();
    a.print();
}

function validate() {
	var $valid = true;
	document.getElementById("user_info").innerHTML = "";
	document.getElementById("password_info").innerHTML = "";

	var userName = document.getElementById("user_name").value;
	var password = document.getElementById("password").value;
	if (userName == "") {
		document.getElementById("user_info").innerHTML = "required";
		$valid = false;
	}
	if (password == "") {
		document.getElementById("password_info").innerHTML = "required";
		$valid = false;
	}
	return $valid;
}