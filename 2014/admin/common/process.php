<?php
	session_start();
	require "dal.php";
	$req = $_REQUEST['req'];
	$table = $_REQUEST['table'];
	$folder = $_REQUEST['folder'];

/////////////////////////FUNCTIONS/////////////////////////////////////////////////////////////

//Career insertion
switch($req) {
	case "login":
		$result = validateLogin($_REQUEST);
		if ($result == "OK"){
			$return = "../pages/?visible=0";
		} else {
			$return = "../login.php?error=login";
		}
		break;

	case "add":
		if (isset($_REQUEST["files"])){
			chdir('../../');
			$files = explode(",", $_REQUEST["files"]);
			foreach($files as $file){
				$result = uploadArchivo($file);
				$_REQUEST[$file] = $result["filename"];
				if ($result["msg"] != ""){
					echo '
						<script language="javascript">
							alert("'.$result["msg"].'");
						</script>				
					';			
				}
			}
		}

		$result = addRecord($table,$_REQUEST);
		if ($result["process"]) $return = "../".$folder;
		else $return = "../".$folder."/?error=add"; 

		break;

	case "upd":
		if (isset($_REQUEST["files"])){
			chdir('../../');
			$files = explode(",", $_REQUEST["files"]);
			$files_old = explode(",", $_REQUEST["files_old"]);
			$total = count($files);			
			for($i=0;$i<=$total;$i++){
				$file = $files[$i];			
				$file_old = $files_old[$i];			
				$result = uploadArchivo($file,$file_old,"update");
				$_REQUEST[$file] = $result["filename"];
				if ($result["msg"] != ""){
					echo '
						<script language="javascript">
							alert("'.$result["msg"].'");
						</script>				
					';			
				}
			}
		}

		$result = updRecord($table,$_REQUEST);
		if ($result) $return = "../".$folder;
		else $return = "../".$folder."/?error=upd"; 

		break;

	case "del":
		$record = getRecord($table,$_REQUEST["id"]);
		chdir('../../');
		$path = getcwd()."/uploads/";
		$files = explode(",", $_REQUEST["files"]);
		foreach($files as $file){
			if ($record[$file] != ""){
				if (file_exists($path.$old)) {
					unlink($path.$record[$file]);
				}
			}
		}
		$result = delRecord($table,$_REQUEST["id"]);
		if ($result) $return = "../".$folder;
		else $return = "../".$folder."/?error=del"; 

		break;
}
?>
<script language="javascript">
	window.location="<?php echo $return;?>";
</script>
