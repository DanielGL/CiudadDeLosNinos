<?php
//Database Connection. May 19, 20012

function connection(){
	if(!($link= @mysql_connect("127.0.0.1","root",""))){
		echo "Server conecction refuse"; 
		exit();
	}


	if(!@mysql_select_db("ciudadNiños",$link)){
		echo "Could not connect to the db";  
		exit();
	}
}
//connection();
?>