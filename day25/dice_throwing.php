<?php

class dice
{
	public $faces;
	
	public function __construct($faces = 6)
	{
		$this->faces = $faces;
	}
	
	public function roll()
	{
		return random_int(1, $this->faces);
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dice throwing game</title>
</head>
<body>

	<form method="post">
		
		<label>Number of dices
			<input type="text" name="number">
		</label><br />
		<label>Number of faces
			<select name="faces">
				<option value="4">4</option>
				<option value="6">6</option>
				<option value="10">10</option>
				<option value="20">20</option>
			</select>
		</label><br />
		
		<input type="submit" value="throw">
	</form>

	<?php
	if (isset($_POST['number'])) {
		// read from $_POST
		// loop and roll dices
		$dice = new dice($_POST['faces']);
		for ($i = 0; $i < $_POST['number']; $i++) {
			echo $dice->roll(), '<br />';
		}
	}
	?>

</body>
</html>