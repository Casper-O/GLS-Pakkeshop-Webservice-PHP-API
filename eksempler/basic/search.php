<?php
	/**
	 * Inkluder klassefilen og lav en instans af klassen
	 */
	include '../../class.wspakkeshop.php';
	$gls = new wsPakkeshop();
	
	/**
	 * Ved at angive en specific og eksisterende adresse vil resultatet
	 * blive mere n�jagtigt i forhold til at angive en ikke eksisterende
	 * adresse. Dette vil medf�re en s�gning p� pakkeshops baseret p� 
	 * postnummer alene
	 * Herunder eksekveres s�gningen. En tredie parameter kan angives til at
	 * bede om flere eller f�rre s�geresultater. Standard er 5.
	 * F.eks.:
	 * $shops = $gls->SearchNearestParcelShops($_POST['address'], $_POST['zipcode'], 10);	 
	 */
	$shops = $gls->SearchNearestParcelShops($_POST['address'], $_POST['zipcode']);
	
	
	
	
	
?>
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
		Herunder udskrives resultatet hvis der kunne findes nogen pakkeshops.
	</p>
	
	<?php if( count($shops) > 0 ): ?>
	
	<?php foreach($shops as $shop): //L�b igennem de returnerede pakkeshops ?>	
	<p>
		<?php echo $shop->CompanyName; ?><br>
		<?php echo $shop->Streetname; ?><br>
		<?php echo $shop->ZipCode; ?> <?php echo $shop->CityName; ?><br>
		<?php echo $shop->Telephone; ?>
	</p>
	<?php endforeach; ?>
	
	<?php else: // hvis der ikke kunne findes nogen pakkeshops ?>
	<p>
		Der kunne ikke findes nogen pakkeshops ud fra den angivne adresse.
	</p>
	<?php endif; ?>

	<p>
		<a href="index.php">S�g igen</a>
		
	</body>
</html>