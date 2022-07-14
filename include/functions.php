<?php
//Sanitizer
if(!function_exists('e')){
	function e($string){
		if ($string) {
			return htmlspecialchars($string);
		}
			
	}
		
}
//check si tous les champ existent et ne sont pas vides
if (! function_exists('not_empty')) {
	function not_empty($fields = []){
		if (count($fields) != 0) {
			foreach ($fields as $field) {
				if (empty($_POST[$field]) || trim($_POST[$field]) == "") {
					return false;
				}//fin if
			}//fin foreach
			return true;
		}//fin if
	}//fin function
}//fin if
//Verifie si une valeur pour un champ donné est déja présent
//au niveau de la base de donné
if (! function_exists('is_already_in_use')) {
		function is_already_in_use($field, $value, $table){
			global $db;
			$query = $db->prepare("SELECT id FROM $table WHERE $field = ?");
			$query -> execute([$value]);
			$count = $query->rowCount();
			$query->closeCursor();
			return $count; 
		}
	}

if (!function_exists('set_flash')) {
	function set_flash ($message, $type = 'info'){
		$_SESSION['notification']['message'] = $message;
		$_SESSION['notification']['type'] = $type;
	}
}
if(!function_exists('redirect')){
	function redirect($page){
		header('Location:'.$page);
		exit();
	}
}
//stocke des input venant d'un formulaire de maniere temporaire en session
if(!function_exists('save_input_data')){
	function save_input_data(){
		foreach ($_POST as $key => $value) {
			if (strpos($key, 'password') === false) {
				$_SESSION['input'][$key] = $value;
			}
		}
	}
}
//Recupère des input de formulaire stockes de maniere temporaire en session
if(!function_exists('get_input')){
	function get_input($key){
		return	!empty($_SESSION['input'][$key]) ?
			$_SESSION['input'][$key]: null;
	}
		
}
//Supprimer des input de formulaire stockes de maniere temporaire en session
if(!function_exists('clear_input_data')){
	function clear_input_data(){
		if (isset($_SESSION['input'])) {
			$_SESSION['input'] = [];
		}
			
	}
		
}
//Gere l'etat actif de nos differents liens
if(!function_exists('set_active')){
	function set_active($file, $class = 'active'){
		$page == array_pop(explode('/', $_SERVER['SCRIPT_NAME']));
		if ($page == $file.'.php') {
			return $class;
		}else{
			return "";
		}
	}
		
}     