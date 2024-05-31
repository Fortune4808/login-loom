<?php include '../../config/config.php';?>

<?php 
	$action=$_POST['action'];
	  switch ($action){

		case 'get_form':
			$page=$_POST['page'];
			require_once ('form.php');
		break;

	case 'login':
		$_SESSION['user_id']=trim($_POST['user_id']);
		$_SESSION['access_key']=trim($_POST['access_key']);
	break;

	case 'reset_password':
		$user_id=trim($_POST['user_id']);
		$page=$action;
		require_once ('content-page.php');
	break;

	case 'password_reset_completed':
		$page=$action;
	  	require_once('content-page.php');
	  break;




	
}
?>
	