<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<pre>
<?php var_dump($_FILES) ?>
</prE>

<form method="post" enctype="multipart/form-data">
	<input type="file" name="my_file_input">
	
	<input type="submit">

</form>

</body>
</html>