<?php
require "vars.php";
require "pagination.php";

//COMMON
function connect(){
	global $cnx,$server,$bd,$user,$password;
	$cnx = mysql_connect($server,$user,$password);
	//mysql_set_charset('utf8',$cnx);	
	
	if (!$cnx) die("Error: <b>MySQL Server Connection Not Available.</b><br />" . mysql_errno() . ": " . mysql_error());
	mysql_select_db($bd,$cnx) or die("Error: <b>MySQL Database Not Available.</b>" . mysql_errno() . ": " . mysql_error());
}


function disconnect(){
	global $cnx;
	mysql_close($cnx);
}


function execute($SQL){
	connect();
	$result = mysql_query($SQL) or die("Error: <b>Execute Query Not Available.</b><br />Query: ".$SQL."<br />" . mysql_errno() . ": " . mysql_error());
	disconnect();
	return $result;
}


function executeInsert($SQL){
	connect();
	$query = mysql_query($SQL) or die("Error: <b>Execute Insert Query Not Available.</b><br />Query: ".$SQL."<br />" . mysql_errno() . ": " . mysql_error());
	$result = mysql_insert_id();
	disconnect();
	return $result;
}


function queryResult($SQL){
	$result = "";
	$query = execute($SQL);
	$numrows = mysql_num_rows($query);
	if ($numrows){
		while ($row = mysql_fetch_array($query))
		$result[] = $row;
	}

	return $result;
}


function addFields($table,$values){
	global $bd;

	connect();
	$listFields = mysql_list_fields($bd, $table);
	$numFields = mysql_num_fields($listFields);
	for ($i = 1; $i < $numFields; $i++) {
		$nameField = mysql_field_name($listFields,$i);
		$valueField = (is_array($values[$nameField])) ? implode(",", $values[$nameField]) : $values[$nameField];
			
		$_fields[] = $nameField;
		$_values[] = "'".$valueField."'";
	}
	disconnect();

	$result = array("fields"=>implode(",", $_fields),"values"=>implode(",", $_values));
	return $result;
}


function updFields($table,$values){
	global $bd;

	connect();
	$listFields = mysql_list_fields($bd, $table);
	$numFields = mysql_num_fields($listFields);
	$_values = "";
	for ($i = 1; $i < $numFields; $i++) {
		$nameField = mysql_field_name($listFields,$i);
		$_values[] = $nameField." = '".$values[$nameField]."'";
	}
	disconnect();
	
	$result = implode(",", $_values);
	return $result;
}
//END COMMON


//UPLOAD FILE
function uploadArchivo($new,$old="",$type=""){
	global $FILE_EXTS, $FILE_SIZE;
	$server = getcwd();
	$path = $server."/uploads/";

	$filename = "";
	$msg = "";
	if ($_FILES[$new]["name"] != "") {

		$arrayFilename = explode(".", $_FILES[$new]["name"]);
		$ext = $arrayFilename[count($arrayFilename) - 1];

		if (!in_array($ext,$FILE_EXTS)){
			$msg = "Invalid file type. The valid files type are: Files: ".implode(' , ', $FILE_EXTS);
			$filename	= $old;
		} else if ($_FILES[$new]["size"] > $FILE_SIZE) {
			$msg = "Maximum file size exceeded. File may be no larger than " . ($FILE_SIZE/1024) . "MB (" . $FILE_SIZE . "KB).";
			$filename	= $old;
		} else if ($_FILES[$new]["error"] > 0){
			$msg = "No file was uploaded [Error Code: " . $_FILES[$new]["error"] . "]";
			$filename	= $old;
		} else {
			
			$filename = strtotime("now") + rand(1, 10);
			$filename .= ".".$ext;
			move_uploaded_file($_FILES[$new]["tmp_name"], $path . $filename);

			if ($type == "update"){
				if ($old != ""){
					if (file_exists($path.$old)) {
						unlink($path.$old);
					}
				}
			}

		}
	} else if($old != ""){
		$filename	= $old;
	}

	$result = array("filename"=>$filename,"msg"=>$msg);

	return $result;
}
//END UPLOAD FILE


//GET ITEMS
function getRecords($table,$pagination=true,$conditions="",$order="",$limit=0,$url="") {
	global $cnx, $rows_per_page, $links_per_page;
	connect();
	$SQL = "SELECT * FROM ".$table;
		$SQL .= ($conditions == "") ? "" : " WHERE ".$conditions;
		$SQL .= ($order == "") ? "" : " ORDER BY ".$order;

	if ($pagination) {
		//with pagination
		$pager = new PS_Pagination($cnx, $SQL, $rows_per_page, $links_per_page, $url);
		$rs = $pager->paginate();
		disconnect();
	
		$result = array("query"=>$rs,"navBar"=>$pager->renderFullNav());
		
	} else {
		$SQL .= ($limit > 0) ? " LIMIT ".$limit : "";
		//without pagination
		$result = queryResult($SQL);
	}
	return $result;
}
//END GET ITEMS


//GET ITEM
function getRecord($table,$id) {
	$SQL = "SELECT * FROM ".$table." WHERE id = ".$id;
	$row = queryResult($SQL);
	if (is_array($row)) $result = $row[0];

	return $result;
}
//END GET ITEM


//ADD
function addRecord($table,$values) {
	$listFields = addFields($table,$values);
	$SQL = "INSERT INTO ".$table." (".$listFields["fields"].") VALUES (".$listFields["values"].")";
	$id = executeInsert($SQL);

	$process = false;	
	if ($id > 0){
		$process = true;
	}
	$result = array("process"=>$process,"id"=>$id);
	return $result;
}
//END ADD


//UPDATE
function updRecord($table,$values) {
	$listFields = updFields($table,$values);
	$SQL = "UPDATE ".$table." SET ".$listFields." WHERE id = ".$values["id"];
	$result = execute($SQL);
	
	if ($result) return true;
	else return false;	
}
//END UPDATE


//DELETE
function delRecord($table,$id=0,$condition="") {
	$SQL = "DELETE FROM ".$table;
	$SQL .= ($id > 0) ? " WHERE id = ".$id : "";
	$SQL .= ($condition != "") ? " WHERE ".$condition : "";
	$result = execute($SQL);

	if ($result) return true;
	else return false;
}
//END DELETE


//LOGIN
function validateLogin($values){
	$result = "NOK";
	$SQL = "SELECT * FROM Users WHERE username = '".$values["username"]."' AND pass = MD5('".$values["pass"]."')";
	$row = queryResult($SQL);
	if (is_array($row)){
		list($year, $month, $day) = explode("-",$row[0]["last_login"]);
		
		$result = "OK";
		$_SESSION["s_login"] = "OK";
		$_SESSION["name"] = $row[0]["name"];
		$_SESSION["last_login"] = date("j M Y", mktime(0, 0, 0, $month, $day, $year));		

		$SQL = "UPDATE Users SET last_login = now() WHERE id = ".$row[0]["id"];
		$result = execute($SQL);				
	}
  return $result;
}
//END LOGIN


//DROPDOWN
function getDropDown($table,$name,$valueid,$valuetext,$valueselected="",$records="",$functions="",$firstitem="Select...",$conditions=""){
	$result = "";
	if ($records == ""){
		$records = getRecords($table,false,$conditions);
	} 
	
	if (is_array($records)){
		$result .= '<select id="'.$name.'" name="'.$name.'" '.$functions.'>';
		$result .= '<option value="0" selected="selected">'.$firstitem.'</option>';
		foreach($records as $record){
			$selected = ($record[$valueid] == $valueselected) ? 'selected="selected"' : "";
			$result .= '<option value="'.$record[$valueid].'" '.$selected.'>'.$record[$valuetext].'</option>';
		}
		$result .= '</select>';
	}
	return $result;
}
//END DROPDOWM


//LAST POSITION
function getLastPosition($table,$field="",$id=0){
	$result = 1;
	$SQL = "SELECT MAX(position) AS lastposition FROM ".$table;
	if ($field != "" && $id > 0){
		$SQL .= " WHERE ".$field."=".$id;
	}
	$row = queryResult($SQL);
	if (is_array($row)) $result += $row[0]["lastposition"];

	return $result;
}
//END LAST POSITION
?>