<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include dirname(__FILE__) . '/pdo_table.php';
include dirname(__FILE__) . '/customer.php';
include dirname(__FILE__) . '/myform.php';

$dbh = new PDO('mysql:host=localhost;dbname=cbc_hackathon2', 'dev', 'devxxx');


$action = isset($_GET['action']) ? $_GET['action'] : 'list';
$display = isset($_GET['display']) ? $_GET['display'] : 'customer';
$row_id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$edit_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$record = isset($_POST['record']) ? $_POST['record'] : null;

switch ($display) {
	case 'customer':
		$form = new myform(new customer());
		$form->addField('name', 'Name');
		$form->addField('email', 'E-Mail', FILTER_VALIDATE_EMAIL);
		break;
}

if (is_array($record) && count($record) > 0) {
	if ($form->validate($record)) {
		if ($row_id != '') {
			$object_item = customer::getOneById($dbh, $edit_id);
			$form->setObject($object_item);
		} else {
			$object_item = new customer();
		}
		foreach ($record as $name => $value)
		{
			$object_item->$name = $value;
		}
		$object_item->save($dbh);
		header('Location: ?');
	}
}

if ($action == 'delete' && $edit_id) {
	$customer = customer::getOneById($dbh, $edit_id);
	$customer->delete($dbh);
	header('Location: ?');
	
}


if ($action == 'edit' && $edit_id)
{
	switch ($display) {
		case 'customer':
			$object_item = customer::getOneById($dbh, $edit_id);
			$form->setObject($object_item);
			break;
	}
} else {
	$object_item = new stdClass();
}



?>
<html>
<head>
	<title>Simple editation</title>
</head>
<body>

<h1><?php echo ucfirst($display) ?></h1>

<?php echo $form ?>

<table border="1">
<?php
$items = customer::getAll($dbh);
foreach ($items as $item): ?>
<tr>
	<td><?php echo $item->id ?></td>
	<td><?php echo $item->name ?></td>
	<td><?php echo $item->email ?></td>
	<td><a href="?display=<?php echo $display ?>&amp;action=edit&amp;id=<?php echo $item->id ?>">Edit</a></td>
	<td><a href="?display=<?php echo $display ?>&amp;action=delete&amp;id=<?php echo $item->id ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>


</body>
</html>
