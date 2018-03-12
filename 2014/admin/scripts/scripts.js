function showBox(id) {
document.getElementById(id).style.visibility='visible';
}

function hideBox(id) {
document.getElementById(id).style.visibility='hidden';
}

function confirmDelete(id,table,folder,files){
	var answer = confirm("Do you really want to delete this record?")
	if (answer){
		window.location = "../common/process.php?req=del&files=" + files + "&table=" + table + "&folder=" + folder + "&id=" + id;
	}
}

function confirmDeleteContent(id,id_module,table,folder,archivo){
	var answer = confirm("Do you really want to delete this record?")
	if (answer){
		window.location = "../common/process.php?req=del&files=" + files + "&table=" + table + "&folder=" + folder + "&id=" + id + "&id_module=" + id_module;
	}
}

function PopupCenter(URL,title,width,height) {
	var left = (screen.width/2)-(width/2);
	var top = (screen.height/2)-(height/2);
	var targetWin = window.open (URL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width='+width+', height='+height+', top='+top+', left='+left);
}		