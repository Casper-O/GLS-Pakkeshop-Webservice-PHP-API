<?php
	/**
	 * Inkluder klassefilen og lav en instans af klassen
	 * Fordi at vi bruger AJAX skal vi ogs� fort�lle vores
	 * instans at vi vil bruge UTF-8 i vores service kald.
	 * Dette medsendes som en parameter i instansieringen.
	 */
	include '../../class.wspakkeshop.php';
	$gls = new wsPakkeshop('DK', 'UTF-8');
	
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
	
	/**
	 * Skab et array til at returnere resultaterne til AJAX kaldet
	 */
	$results = array();	
	
	foreach($shops as $shop)
	{
		
		$tmp = array();
		$tmp["Number"] = trim($shop->Number);
		$tmp["CompanyName"] = trim($shop->CompanyName);
		$tmp["Streetname"] = trim($shop->Streetname);
		$tmp["ZipCode"] = trim($shop->ZipCode);
		$tmp["CityName"] = trim($shop->CityName);	
		$tmp["Telephone"] = trim($shop->Telephone);
	
		//Skub det midlertidige array ind i resultat arrayet.
		$results[] = $tmp;		
	}
	
	/**
	 * Konverter til JSON format og output det til browseren
	 */
	 echo json_encode($results);

?>