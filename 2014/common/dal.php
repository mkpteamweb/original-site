<?php
require "vars.php";

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
//END COMMON


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
?>