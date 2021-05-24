<?php
function getUnsplash($custom_count = 5) {

	$count = $custom_count;

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.unsplash.com/photos/random?count=" . $count . "&client_id=BYFQCHwNdddv7p4KIe49XGScZm_-DT4VJ0oThx8XtZo",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
	));
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	if ($err) {
		return false;
	} else {
		return $response;
	}
}

