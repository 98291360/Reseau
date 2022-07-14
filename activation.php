<?php 
session_start();

include('filters/guest_filter.php');
require "config/db.php";
require "include/functions.php"; 
if (!empty($_GET['p']) && is_already_in_use('pseudo', $_GET['p'], 'users') && !empty($_GET['token'])) {
	$pseudo = $_GET['p'];
	$token = $_GET['token'];
	$query = $db->prepare('select email, password from users where pseudo = ?');
	$query ->execute([$pseudo]);
	$data = $query->fetch(PDO::FETCH_OBJ);
	$token_verif = sha1($pseudo.$data->email.$data->password);
	if ($token == $token_verif) {
		$query = $db->prepare("update users set active = '1' where pseudo = ?");
	$query ->execute([$pseudo]);
	 redirect('login.php');
	}else{
		 set_flash('Paramètre invalid!', 'danger');
		 redirect('index.php');
	}
	die($data->email);
}
//else{
//	redirect('index.php');
//}