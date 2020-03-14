<?php
 
  
    $apen[] = "Baviaan";
    $apen[] = "Guereza";
    $apen[] = "Langoer";
    $apen[] = "Tamarin";
    $apen[] = "Neusaap";
    $apen[] = "Halfaap";
    $apen[] = "Mandril";
    $apen[] = "Oeakari";
    $apen[] = "Faunaap";
    $apen[] = "Hoelman";
    $apen[] = "Meerkat";
    $apen[] = "Oormaki";
    $apen[] = "Gorilla";
    $apen[] = "Kuifaap";
    $apen[] = "Mensaap";
    $apen[] = "Spinaap";
?>
     
     
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>monkey Business</title>
<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
<style type="text/css">
	body{
		text-align: center;
		font-family: Arial ;
	}

	p{
		color: #ff8400;
		font-family: 'Bangers', cursive;
		font-size: 16px;
	}
</style>
</head>

<body>
	<img src="images/monkey-business.jpg">

	<h1>select your monkey!</h1>

	<img src="images/monkey_swings.png">

	<?php foreach ($apen as $aap){ ?>
		<p><?= $aap; ?> </p>

	
	<?php } ?>
		
	


</body>

</html>