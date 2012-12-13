<?php
	$greetings = array("Haha Business!",
		"хаха бизнес!",
		"Haha Enterprise!",
		"Haha Negoco!",
		"Busnes Haha!",
		"Haha Biznes!",
		"Jaja negocios!",
		"Haha Affari!",
		"Höhö företag!",
		"Haha Negotium!",
		"Haha Gnó!",
		"Haha Podnikania!",
		"Haha Enpresa!",
		"Haha Negocis!",
		"Haha Forretning!",
		"Haha Aff&auml;rer!",
		"Haha Verlas!",
		"Haha Bisnis!",
		"Haha Liiketoimiminnan!",
		"Haha Podnikáni!",
		"Haha Bedrijf!",
		"Haha Perniagaan!",
		"Haha Kinh Doanh!",
		"Haha Negosyo!",
		"Haha Biashara!",
		"Haha Virksomhet!",
		"Haha de Afaceri!",
		"Haha Firma!",
		"Haha Terkakni!"
		);
	//Generate a random number for a greeting
	$index = rand(0, count($greetings)-1);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="refresh" content="2" />
	<style>
		body {
			background-color:#d8d8d8;
			text-align:center;
		}
		h1 {
			font-family:'Helvetica',arial,sans-serif;
		}
	</style>
	<title>
		<?php echo $greetings[$index] ?>
	</title>
</head>
<body>
	<img id="pic" src="business.jpg" alt="HAHA! BUSINESS!" />
	<h1><?php echo $greetings[$index] ?></h1>
</body>
</html>
		
