<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fbsignin extends CI_Controller {

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
		require_once __DIR__.'/facebookoauth/vendor/autoload.php';
		
		$fb = new Facebook\Facebook([
		  'app_id' => '1597049607039898', // Replace {app-id} with your app id
		  'app_secret' => 'bc433d4fc94b93775ae8623081cf17a9',
		  'default_graph_version' => 'v2.2',
		]);

		$helper = $fb->getRedirectLoginHelper();

		$permissions = ['email']; // Optional permissions
		$loginUrl = $helper->getLoginUrl('http://loaclhost/Codeigniter/index.php/fbsignin/oauthcallback', $permissions);
		header("Location:{$loginUrl}");
	}
	public function oauthcallback()
	{
		require_once __DIR__.'/facebookoauth/vendor/autoload.php';
		
		$fb = new Facebook\Facebook([
		  'app_id' => '1597049607039898', // Replace {app-id} with your app id
		  'app_secret' => 'bc433d4fc94b93775ae8623081cf17a9',
		  'default_graph_version' => 'v2.2',
		]);

		$helper = $fb->getRedirectLoginHelper();

		try {
		  $accessToken = $helper->getAccessToken();
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  // When Graph returns an error
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  // When validation fails or other local issues
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}

		if (! isset($accessToken)) {
		  if ($helper->getError()) {
			header('HTTP/1.0 401 Unauthorized');
			echo "Error: " . $helper->getError() . "\n";
			echo "Error Code: " . $helper->getErrorCode() . "\n";
			echo "Error Reason: " . $helper->getErrorReason() . "\n";
			echo "Error Description: " . $helper->getErrorDescription() . "\n";
		  } else {
			header('HTTP/1.0 400 Bad Request');
			echo 'Bad request';
		  }
		  exit;
		}

		// Logged in
		echo '<h3>Access Token</h3>';
		var_dump($accessToken->getValue());

		// The OAuth 2.0 client handler helps us manage access tokens
		$oAuth2Client = $fb->getOAuth2Client();

		// Get the access token metadata from /debug_token
		$tokenMetadata = $oAuth2Client->debugToken($accessToken);
		echo '<h3>Metadata</h3>';
		var_dump($tokenMetadata);

		// Validation (these will throw FacebookSDKException's when they fail)
		$tokenMetadata->validateAppId('{app-id}'); // Replace {app-id} with your app id
		// If you know the user ID this access token belongs to, you can validate it here
		//$tokenMetadata->validateUserId('123');
		$tokenMetadata->validateExpiration();

		if (! $accessToken->isLongLived()) {
		  // Exchanges a short-lived access token for a long-lived one
		  try {
			$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
		  } catch (Facebook\Exceptions\FacebookSDKException $e) {
			echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
			exit;
		  }

		  echo '<h3>Long-lived</h3>';
		  var_dump($accessToken->getValue());
		}

		$_SESSION['fb']['access_token'] = (string) $accessToken;
		$redirect_uri = 'http://localhost/Codeigniter/';
		header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
	}
	public function sessiondata()
	{
		foreach($_SESSION['fb']['access_token'] as $token){
			echo $token.'\n';
		}
	}
}
