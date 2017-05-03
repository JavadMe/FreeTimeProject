<?php
/*
 * login.php
 * 
 * Copyright 2016 Unknown <javad@nirvana>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#div" ).draggable({scroll:false});
  });
  </script>
<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.26" />
</head>

<body style="background-image:url(images/88.jpg); background-size:auto;">
	<div id="div" style="
    position: relative;
    top: 175px;" align="center">
<?php

	$dbserver = "localhost";
	$dbuser = "admin";
	$dbpassword = "password";
	$dbdatabase = "asm";
	if($_POST){
		
		$login = $_POST["login"];
		$password = $_POST["password"];
	}
	else{
		
		die("Please fill all the fileds");
	}
	$sql = 'SELECT password FROM users WHERE login="'.$login.'";';
	$query = 'SELECT* FROM users WHERE login="'.$login.'";';
	
	$conn = new mysqli($dbserver, $dbuser, $dbpassword, $dbdatabase);
	$result = $conn->query($sql);
	$data = mysqli_fetch_array($result);
	if($password == $data["password"]){
		$res = $conn->query($query);
		$dat = $res->fetch_assoc();
		echo '<table cellpadding="10" style="background-color:rgba(200,200,200,.25);">';
		echo "<tr><td><h1>Login Successful: </h1></td></tr>";
		foreach ($dat as $key=>$value){
			echo "<tr><td>".ucfirst($key)." : </td><td>$value</td></tr>";
		}
	
	echo '</table>';
		
	}else{
		echo "Login incorrect! Redirecting...";
		header("Location: http://localhost/asm/login.html");
		exit();
	}
	

?>
	</div>
</body>

</html>
