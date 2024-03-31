<?php include '../../config/config.php';?>

<?php 
	$action=$_POST['action'];
	  switch ($action){

	case 'get_page':
		$page=$_POST['page'];
		include '../content/content-page.php';
	break;


	case 'get_form':
		$page=$_POST['page'];
		include '../content/form.php';
	break;

	case 'get_admin_profile':
		$page=$_POST['page'];
		include '../content/form.php';
	break;


   	case 'logout':
		session_destroy();
		?>
		<script>
		window.parent(location="../../");
		</script>
		<?php
	break;

	

	
}
?>
	