<?php
require './modules/game-info.php';
$gameID = $_GET['id'];
$gameInfo = getGameInfo($gameID);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Super Mario Odyssey Speedrun Page</title>
		<link rel="stylesheet" type="text/css" href="/styles/theme.css" />
		<script src="/scripts/menu.js" type="application/javascript"></script>
	</head>
	
	
	<body>
		<?php require './modules/header.php'; ?>
		<h1><?php echo $gameInfo['name']; ?> Speedrun Page</h1>
		<img src="<?php echo $gameInfo['img']; ?>" title="<?php echo $gameInfo['name']; ?>" height="1000" width="500"/>
		<p><?php echo $gameInfo['desc']; ?></p>
		
		<h3>Top Speedrun Times</h3>
		<table>
            <tr>
                <th>Place</th>
                <th>Name</th>
                <th>Time(h/m/s)</th>
            </tr>
            <?php
                require './modules/times.php';
                $times = getTimes($gameID);
            ?>
		</table>
		<br />
		<a href="submitform.php?id=<?php echo $gameInfo['id']; ?>">SUBMIT YOUR TIME</a>
		<?php require './modules/footer.php'; ?>
		
	</body>
</html>
