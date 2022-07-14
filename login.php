<?php
session_start();

include('filters/guest_filter.php'); 
require('config/db.php');
require('include/functions.php');
require('include/constants.php');

//Si le formulaire a été soumis
if (isset($_POST['login'])) {

	//Si tous les champs ont été remplis
	if (not_empty(['identifiant', 'password', 'active'])) {
			
			extract($_POST);

	$query = $db->prepare("SELECT id, pseudo FROM users 
	                     	WHERE (pseudo= :identifiant OR email = :identifiant)
		                    AND password = :password AND active= '1' ");

	
	$query->execute([ 'indentifiant' => $identifiant, 
		                'password' => sha1($password) ]);


	$userHaseBeenFound = $query->rowCount();
    
	if ($userHaseBeenFound) {
		$user = $query->fetch(PDO::FETCH_OBJ);
		die($user->id);

		$_SESSION['user_id']=
		redirect('p.php');
	}else{
		set_flash('Combinaison identifiant/password incorrect', 'danger');
		save_input_data();
	}//fin else
		
		}

}else{
	clear_input_data();//S'il vient fraichement sur la page, il n'ya aucune raison que les champs soient pre-remplis.
}
?>

<?php
require('views/login.view.php');
?> 