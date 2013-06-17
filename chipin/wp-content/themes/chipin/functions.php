<?php 

require_once('connections.php');

$userInfo       = mysql_query("SELECT user_email, user_pass FROM ci_users WHERE user_login = '$user'") or die("unable to connect to table: ".mysql_error());
$userRow        = mysql_fetch_assoc($userInfo);

add_action('wp_ajax_deleteProject','deleteProject');
add_action('wp_ajax_nopriv_deleteProject','deleteProject');

add_action('wp_ajax_updateProfile','updateProfile');
add_action('wp_ajax_nopriv_updateProfile','updateProfile');

function deleteProject() {

	$projid = $_POST['projid'];
	$pod = pods('project');

	$pod->delete($projid);
	
	exit;

};

function updateProfile() {

	$newEmail = $_POST['newEmail'];

	$currentPassword = $_POST['currentPassword'];

	if ($userRow['user_pass'] == $currentPassword) {

		$newPass = $_POST['newPass'];

	} else {

		$newPass = md5(utf8_encode($_POST['newPass']));

	};

    $userID = $_POST['userID'];

    mysql_query("UPDATE ci_users SET user_email='$newEmail', user_pass = '$newPass' WHERE user_login = '$userID'") or die("unable to connect to table: ".mysql_error());
	
	exit;

};