		document.getElementById('two').style.display = "none";
		document.getElementById('three').style.display = "none";
		document.getElementById('x').style.display = "none";
	function win1 () {
		window.location = 'manage.php';
		document.getElementById('two').style.display = "none";
		document.getElementById('three').style.display = "none";
		document.getElementById('x').style.display = "none";

	}
	function win2 () {
		document.getElementById('one').style.display = "none";
		document.getElementById('two').style.display = "block";
		document.getElementById('three').style.display = "none";
		document.getElementById('delbtn').style.display = "none";
		document.getElementById('editbtn').style.display = "none";
		document.getElementById('x').style.display = "block";
	}

	function win3 () {
		document.getElementById('one').style.display = "none";
		document.getElementById('two').style.display = "none";	
		document.getElementById('three').style.display = "block";	
		document.getElementById('delbtn').style.display = "none";
		document.getElementById('editbtn').style.display = "none";
		document.getElementById('x').style.display = "block";
	}
