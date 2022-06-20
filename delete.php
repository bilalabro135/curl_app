<?php 

	$url = 'http://localhost:8000/api/delete/3';
 
	$curl = curl_init();
	 
	$fields = array(
	    'name' 	=> 'Babar sheikh geeksroot',
	    'age' 	=> '27',
	    'skill' => 'PHP',
	    '_method' => 'GET'
	);
	 
	$fields_string = http_build_query($fields);
	 
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, TRUE);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
	 
	$data = curl_exec($curl);
	
	echo $data;

	curl_close($curl);


 ?>