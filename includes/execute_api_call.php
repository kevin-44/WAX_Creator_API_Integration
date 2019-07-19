<?php
	function ExecuteAPICall($method, $endpoint, $data, $url = "https://api-icm.wax.io/api/")
	{
		$url .= $endpoint;

		if($method == "POST")
		{
			$curl_handler = curl_init();

			curl_setopt_array($curl_handler, array(
				CURLOPT_URL => $url,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => http_build_query(((isset($data)) ? ($data) : (array()))),
				CURLOPT_RETURNTRANSFER => true
			));

			$response = curl_exec($curl_handler);

			curl_close($curl_handler);
		}
		else
		{
			$curl_handler = curl_init();

			curl_setopt_array($curl_handler, array(
				CURLOPT_URL => $url . ((isset($data)) ? ("?" . $data) : ("")),
				CURLOPT_RETURNTRANSFER => true
			));

			$response = curl_exec($curl_handler);

			curl_close($curl_handler);
		}

		if($response === false)
		{
			return NULL;
		}
		return $response;
	}
?>