<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Roll Dice</title>
	</head>
	<body>
		<h1>Guess: </h1>
		<h2><?= $guess ?></h2>
		<h1>Roll: </h1>
		<h2><?= $roll ?></h2>

		<?php if ($guess ==  $roll): ?>
			<h1> You guessed it! </h1>
		<?php else: ?>
			<h1>WRONG</h1>
		<?php endif ?>
	</body>
</html>
