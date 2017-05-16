<?php

class Github {

	protected $curl;

	protected $baseUrl = "https://api.github.com";

	protected $defaultOpts = [
		CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13'
	];

	public function __construct()
	{
		$this->curl = curl_init();
	}

	public function getUserRepos($username)
	{
		$url = "{$this->baseUrl}/users/{$username}/repos";
		$curlOpts = [
			CURLOPT_URL => $url
		];
		curl_setopt_array($this->curl, $this->defaultOpts + $curlOpts);

		return curl_exec($this->curl);
	}

}