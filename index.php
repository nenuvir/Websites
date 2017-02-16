<?php 
if (!isset($_REQUEST['firstname']))
{
	include 'myexample1.html';
}
else
{
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
if
	($firstname == "Kevin" AND $lastname =="Mallory")
{
	$output = "Welcome, oh glouriuos leader!";
}
else {
	$output = 'welcome to our website, ' . 
	htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8')  . " " . 
	htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
}
include 'welcome.html.php';
}