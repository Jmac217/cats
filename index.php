<html>
<head>
<link rel='stylesheet' type='text/css' href='cats.css'/>
<title>Cats!</title>
</head>
<body>
<header>Because sometimes you just need a fucking break...</header>
<div id='list'>
<?php
	$file = "cats.txt";
    $lines = file($file);

    $lineNumber = 1;
    foreach($lines as $line)
    {
		echo"<li>" . $line . "</li>";

		$lineNumber++;
    }
?>
</div>
</body>
</html>