<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>

<?php include_layout_template('admin_header.php'); ?>

<?php
	// $user = new User();
	// $user->username = "demo";
	// $user->password = "demo1234";
	// $user->first_name = "Ally";
	// $user->last_name = "Tan";
	// $user->create();


	// $user = User::find_by_id(2);
	// $user->password = "demo1234";
	// $user->save();

	$user = User::find_by_id(2);
	$user->delete();
	echo $user->first_name . " was deleted";

?>

<?php include_layout_template('admin_footer.php'); ?>
		


