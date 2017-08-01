<?php
$Args = array(
	'Select' => array('id'=>'users.id','email'=>'email','first_name'=>'first_name','last_name'=>'last_name','phone'=>'users.phone'),
	'From' => array('users order by id desc'),
	'Where' => array(),
	'Join' => array(),
	'Module'=> array('Users','Manage users'),
	'Operations' => array('edit','delete'),
	'THead' => array('ID', 'Email', 'First name', 'Last name', 'Phone', 'Operations'),
	'Files' => array(),
	'Buttons' =>	array(
					array('New user','Users/Add','add','btn btn-link','Add new user')
				),
	'UPLOADFIELDS' => array()
	);
$Tables = new Tables();
$DATATABLE = $Tables->GET($Args);
?>


