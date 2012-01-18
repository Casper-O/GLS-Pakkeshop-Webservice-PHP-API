<!DOCTYPE html>
<html>
	<head>
		<title>GLS Pakkeshop SOAP Service eksempel: basic</title>
		<style type="text/css">
		body { font-family: Calibri, Verdana, "Sans Serif"; }
		label { display: block; }			
		</style>
	</head>
	<body>

	<h2>Et basalt eksempel p� brug af klassen</h2>
	
	<p>
		Dette eksempel viser hvordan du kan s�ge efter GLS Pakkeshops ud fra postnummer ved hj�lp af en simpel form.
	</p>
	
	<form method="post" action="search.php">		
		<p>
			<label for="zipcode">Postnummer:</label>
			<input type="text" name="zipcode" id="zipcode">
		</p>
		
		<p>
			<input type="submit" name="search" value="S�g">
		</p>
	</form>
		
	</body>
</html>