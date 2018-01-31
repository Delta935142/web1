<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Googlesignin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		require_once __DIR__.'/googleoauth/vendor/autoload.php';
		
		// 設定 client 端的 id, secret
		$client = new Google_Client();
		$client->setAuthConfig(__DIR__.'/googleoauth/client_secret_382692752093-d65kkvham1nfrhclorlvt25ogsoj53a9.apps.googleusercontent.com.json');
		$client->setAccessType("offline");        // offline access
		$client->setIncludeGrantedScopes(true);   // incremental auth
		 
		$client->revokeToken();
		session_destroy();
		 
		// 添加授權範圍，參考 https://developers.google.com/identity/protocols/googlescopes
		$client->addScope(['https://www.googleapis.com/auth/userinfo.profile']);
		$client->setRedirectUri("http://localhost/Codeigniter/index.php/googlesignin/oauthcallback");
		$url = $client->createAuthUrl();
		header("Location:{$url}");
	}
	public function oauthcallback()
	{
		require_once __DIR__.'/googleoauth/vendor/autoload.php';
		
		// 設定 client 端的 id, secret
		$client = new Google_Client();
		$client->setAuthConfig(__DIR__.'/googleoauth/client_secret_382692752093-d65kkvham1nfrhclorlvt25ogsoj53a9.apps.googleusercontent.com.json');
		$client->setAccessType("offline");        // offline access
		$client->setIncludeGrantedScopes(true);   // incremental auth
		$client->setRedirectUri("http://localhost/Codeigniter/index.php/googlesignin/oauthcallback");
		
		// 使用者認證後，可取得 access_token 
		if (isset($_GET['code'])) 
		{
			$result = $client->authenticate($_GET['code']);
		 
			if (isset($result['error'])) 
			{
				die($result['error_description']);
			}
		 
			$_SESSION['google']['access_token'] = $client->getAccessToken();
			$redirect_uri = 'http://localhost/Codeigniter/';
			header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
		}
	}
	public function sessiondata()
	{
		foreach($_SESSION['access_token'] as $token){
			echo $token.'\n';
		}
	}
}
