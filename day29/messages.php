<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Initialization part
$dbh = new PDO('mysql:host=localhost;dbname=secret_agency', 'dev', 'devxxx');


// Action part
if (count($_POST) > 0)
{
	$agent_id = filter_input(INPUT_POST, 'agent_id', FILTER_VALIDATE_INT);
	$clearance_level = filter_input(INPUT_POST, 'clearance_level', FILTER_VALIDATE_INT);
	$body = filter_input(INPUT_POST, 'body');
	
	if (!$agent_id || !$clearance_level || $body == '')
	{
		header('Location: ?success=no');
	} else {
		// future INSERT ....
		$statement = $dbh->prepare('INSERT INTO message (agent_id, clearance_level, body) VALUES (?, ?, ?)');
		$result = $statement->execute([$agent_id, $clearance_level, $body]);
		header('Location: ?success=yes');
	}
}



// Template (display) part
$success = filter_input(INPUT_GET, 'success');

?>
<html>
<head>
	<title>Messages</title>
</head>
<body>

<?php if ($success =='no') echo '<p style="color: red">FAIL</p>'; ?>
<?php if ($success =='yes') echo '<p style="color: green">SUCCESS</p>'; ?>

<form method="post">
	<label>Agent ID:
		<input type="text" name="agent_id">
	</label><br />
	<label>Clearance level:
		<input type="text" name="clearance_level">
	</label><br />
	<label>Body:<br />
		<textarea name="body" cols="30" rows="5"></textarea>
	</label><br />
	<input type="submit" value="Insert message">
</form>

<table border="1">
<?php
$statement = $dbh->query("SELECT * FROM message");
foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
	echo "<tr><td>" . join('</td><td>', $row) . '</td></tr>';
}

?>
</table>

</body>
</html>
		