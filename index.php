<html>
<head>
<link rel='stylesheet' type='text/css' href='cats.css'/>
<title>Cats!</title>
</head>
<body>
<header>Because sometimes you have nothing better to do...</header>
<div id='list'>
<?php
	$file = "cats.txt";
    $lines = file($file);

    $lineNumber = 1;
    foreach($lines as $line)
    {
		if ($lineNumber%2==0){
			echo"<li style='background-color:#3a3a3a;'>" . $line . "</li>";
		}else{
			echo"<li>" . $line . "</li>";
		}

		$lineNumber++;
    }
?>
</div>
</body>
</html>
