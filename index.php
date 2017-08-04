<?php
session_start();
require_once 'chatdb.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> First chat App</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body>
<div id="container">
	<div id="chat_box">
		<?php
		$query = "SELECT * FROM chat ORDER BY id";
		$result = $sql->query($query);
		// function 
		while($row = $result->fetch_assoc()):
		?>
		<div id="chat_data">
			<!-- <span style="color: green;">Samarth:</span>
			<span style="color: brown;">Hey, How are you?</span>
			<span style="float: right;"> 12:30PM</span> -->
			<span style="color: blue; font-size:0.8em"><?= "{$row['name']}:";?></span>
			<span style="color: #666;font-size:0.7em"><?= $row['msg'];?></span>
			<button style="background: #fff;border: none;color: red;float: right; margin-top: 2px;">delete</button>
			<span style="float: right;margin-right:5px;font-size:0.7em;color: #333;"><?= $row['date'];?></span>
		</div>
		<?php endwhile;?>
	</div>
	<form method="POST" action='send.php'>
	<input type="text" id="name" name="name" placeholder="Enter name: "/>
	<textarea id="entmsg" name="entmsg" placeholder="Enter Message"></textarea>
	<input type="submit" name="submit" value="Send!" onclick="validate()" />
	</form>
</div>
<script type="text/javascript" src="app.js"></script>
</body>
</html>