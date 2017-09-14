<!DOCTYPE html>
<html>
<head>

	<title>Hisham Elhaggaz</title>
	<meta charset="utf-8/>
	<link href='css/main.css' rel='stylesheet'>

</head>
<body>

	<div class="container">

		<h1>Hisham Elhaggaz</h1>

		<div class="container">
		  <div class="center">
		    <img src='images/hisham.jpg' alt='Hisham Elhaggaz'>
		  </div>
		</div>


		<h2>About Me</h2>
		<p>
“My name is Hisham Elhaggaz, and I enjoy traveling and meeting new people. I have had an opertunity to to visit many countries, which enriched my life experience.
I really enjoy working as computer developer”
		</p>

		<h2>Random Quote</h2>
		<p>
<?php
		$lines = file('quotes.txt');
		echo $lines[array_rand($lines)];
?>
		</p>
	</div>

</body>
</html>
