<?php
// including the database connection file
include_once("classes/Crud.php");
include_once("classes/Validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['update']))
{	
	$id = ($_POST['id']);
	
	$name = ($_POST['name']);
	$age = ($_POST['age']);
	$email = ($_POST['email']);
	
	$msg = $validation->check_empty($_POST, array('name', 'age', 'email'));
	$check_age = $validation->is_age_valid($_POST['age']);
	$check_email = $validation->is_email_valid($_POST['email']);
	
	// checking empty fields
	if($msg) {
		echo $msg;		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} elseif (!$check_age) {
		echo 'Please provide proper age.';
	} elseif (!$check_email) {
		echo 'Please provide proper email.';	
	} else {	
		//updating the table
		$result = $crud->editar($id, $name,$age,$email);
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
