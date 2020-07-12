<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{

	/*
	|--------------------------------------------------------------------------
	| Base Site URL
	|--------------------------------------------------------------------------
	|
	| URL to your CodeIgniter root. Typically this will be your base URL,
	| WITH a trailing slash:
	|
	|	http://example.com/
	|
	| If this is not set then CodeIgniter will try guess the protocol, domain
	| and path to your installation. However, you should always configure this
	| explicitly and never rely on auto-guessing, especially in production
	| environments.
	|
	*/
	public $baseURL = 'http://wempy.xyz/;

	/*
	|--------------------------------------------------------------------------
	| Index File
	|--------------------------------------------------------------------------
	|
	| Typically this will be your index.php file, unless you
	|
	*/
	public $indexPage = '';


	public $uriProtocol = 'REQUEST_URI';


	public $defaultLocale = 'en';


	public $negotiateLocale = false;


	public $supportedLocales = ['en'];


	public $appTimezone = 'America/Chicago';


	public $charset = 'UTF-8';


	public $forceGlobalSecureRequests = false;


	public $sessionDriver            = 'CodeIgniter\Session\Handlers\FileHandler';
	public $sessionCookieName        = 'ci_session';
	public $sessionExpiration        = 7200;
	public $sessionSavePath          = WRITEPATH . 'session';
	public $sessionMatchIP           = false;
	public $sessionTimeToUpdate      = 300;
	public $sessionRegenerateDestroy = false;


	public $cookiePrefix   = '';
	public $cookieDomain   = '';
	public $cookiePath     = '/';
	public $cookieSecure   = false;
	public $cookieHTTPOnly = false;


	public $proxyIPs = '';


	public $CSRFTokenName  = 'csrf_test_name';
	public $CSRFHeaderName = 'X-CSRF-TOKEN';
	public $CSRFCookieName = 'csrf_cookie_name';
	public $CSRFExpire     = 7200;
	public $CSRFRegenerate = true;
	public $CSRFRedirect   = true;


	public $CSPEnabled = false;
}
