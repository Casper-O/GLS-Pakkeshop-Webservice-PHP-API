##############
Hvad er dette?
##############

Denne klasse er til dig som gerne vil introducere GLS Pakkeshop som en del af dine ydelser.
Det giver dig muligheden for at s�ge efter pakkeshops ud fra adresser og postnumre.
Du kan ogs� finde oplysninger om specifikke pakkeshops.

****************
Eksempel p� brug
****************


	<?php
		require_once 'class.wspakkeshop.php';
		$gls = new wsPakkeshop();
		      
		// Find n�rmeste pakkeshops n�r Skyggevej 1 i 4600 K�ge
		$shops = $gls->SearchNearestParcelShops('Skyggevej 1', 4600);
		foreach($shops as $shop)
		{
			// Udskriver pakkeshoppenes nummer og navn
			echo $shop->Number.": ".$shop->CompanyName."<br>";	
		}
	?>


***********
Server Krav
***********

- PHP version 5.1.6 eller nyere
- PHP med --enable-libxml samt --enable-soap

*****
To-do
*****

-	Klassen skal g�res kompatibel med nuSOAP
- Udarbejde eksempler p� brug af klassen