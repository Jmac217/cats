<html>
<head>
<link rel='stylesheet' type='text/css' href='cats.css'/>
<title>Cats!</title>
</head>
<body>
<a href="https://github.com/Jmac217/cats"><img style="position: absolute; top: 0; right: 0; border: 0;z-index:2;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
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
