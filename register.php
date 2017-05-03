<?php
/*
 * register.php
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
<?php

	$dbserver = "localhost";
	$dbuser = "admin";
	$dbpassword = "password";
	$dbdatabase = "asm";
	
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$login = $_POST["login"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$bdate = $_POST["birthdate"];
	$comments = $_POST["comments"];
	$sql = "INSERT INTO users(name,surname,login,password,email,comment) VALUES('$name','$surname','$login', '$password','$email','$comments');";
	
	$conn = new mysqli($dbserver, $dbuser, $dbpassword, $dbdatabase);
	$conn->query($sql);
	echo "Success";
	
	
?>
