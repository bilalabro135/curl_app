<?php 
	
	$url = 'http://localhost:8000/api/show/2';
 
	$curl = curl_init();
	 
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HEADER, false);
	 
	$data = curl_exec($curl);
	
	echo $data;

	curl_close($curl);


 ?>