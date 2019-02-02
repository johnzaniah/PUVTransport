function update() {
 		var dt = new Date ();
 		document.getElementById("date").innerHTML = dt.toLocaleString();
		setTimeout(update, 1000);
 	}
	update();
