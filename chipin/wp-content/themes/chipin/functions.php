<?php 

add_action('wp_ajax_newUser','newUser');
add_action('wp_ajax_nopriv_newUser','newUser');

add_action('wp_ajax_deleteProject','deleteProject');
add_action('wp_ajax_nopriv_deleteProject','deleteProject');

function newUser() {

	$register   = pods('user');
    $parms      = array('orberby' => 'name', 'limit' =>-1);
    $register   ->find($parms);

	$name			= $_POST['name'];
	$email			= $_POST['email'];
	$password		= $_POST['password'];

	$field = array(
		'name'			=> $name,
		'email'			=> $email,
		'password'		=> $password
	);

	$add = $register->add($field);

	if($add) {
		echo "sucess";
		exit();
	};

};

function deleteProject() {

	$projid = $_POST['projid'];
	$pod = pods('project');

	$pod->delete($projid);

	echo $projid;
	
	exit;

};