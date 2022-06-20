<?php 

	$url = 'http://localhost:8000/api/store';
 
	$curl = curl_init();
	 
	$fields = array(
	    'name' 	=> 'Bilal Abro',
	    'age' 	=> '20',
	    'skill' => 'PHP'
	);
	 
	$fields_string = http_build_query($fields);
	 
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, TRUE);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
	 
	$data = curl_exec($curl);
	
	echo $data;

	curl_close($curl);


 ?>