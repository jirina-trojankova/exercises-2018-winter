<?php
require_once dirname(__FILE__) . '/game.php';
require_once dirname(__FILE__) . '/genre.php';

$dbh = new PDO('mysql:host=localhost;dbname=games', 'dev', 'devxxx');

?>
<html>
<head>
	<title>Games</title>
</head>
<body>

<?php
$games = game::getAllGames($dbh);
$game_ids = [];
foreach ($games as $game) {
	$game_ids[] = $game->id;
}
$genres = genre::getGenresForGames($dbh, $game_ids);
foreach ($games as $game): ?>

<div class="game">
	<div class="image">
		<img src="<?php echo $game->image_url ?>" />
	</div>
	<div class="info">
		<h2 class="name"><?php echo $game->name ?></h2>
		<div class="release">Released at: <?php echo $game->released_at ?></div>
		<div class="genres">
			<?php foreach ($genres[$game->id] as $genre): ?>
			<a href="#"><?php echo $genre->name ?></a>
			<?php endforeach; ?>
		</div>
		<div class="description">
			<?php echo $game->description ?>
		</div>
		<div class="rating"><?php echo $game->rating ?>%</div>
	</div>
</div>
<?php endforeach; ?>


</body>
</html>
