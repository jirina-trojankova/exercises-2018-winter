<?php
$page_title = 'Shopping list';
$page = 'home';
if (isset($_GET['page'])) {
	$page = $_GET['page'];
}
$items = [];
if (!empty($_POST['item'])) {
	var_dump($_POST);
	$items = $_POST['item'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A HTML5 document</title>
</head>
<body>

<h1><?php echo $page_title ?></h1>

<nav>
	<a href="?page=home">Home</a>
	<a href="?page=form">Form</a>
</nav>

<?php if ($page == 'form') {
	include './workout3-form.php';
} else {
	include './workout3-home.php';
}
?>
</body>
</html>