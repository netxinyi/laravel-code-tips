<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:01
 */

class Input extends \Illuminate\Support\Facades\Input{

	/**
	 * Return the Request instance.
	 *
	 * @return \Illuminate\Http\Request
	 * @static
	 */
	public static function instance(){
		return \Illuminate\Http\Request::instance();
	}

	/**
	 * Get the request method.
	 *
	 * @return string
	 * @static
	 */
	public static function method(){
		return \Illuminate\Http\Request::method();
	}

	/**
	 * Get the root URL for the application.
	 *
	 * @return string
	 * @static
	 */
	public static function root(){
		return \Illuminate\Http\Request::root();
	}

	/**
	 * Get the URL (no query string) for the request.
	 *
	 * @return string
	 * @static
	 */
	public static function url(){
		return \Illuminate\Http\Request::url();
	}

	/**
	 * Get the full URL for the request.
	 *
	 * @return string
	 * @static
	 */
	public static function fullUrl(){
		return \Illuminate\Http\Request::fullUrl();
	}

	/**
	 * Get the current path info for the request.
	 *
	 * @return string
	 * @static
	 */
	public static function path(){
		return \Illuminate\Http\Request::path();
	}

	/**
	 * Get the current encoded path info for the request.
	 *
	 * @return string
	 * @static
	 */
	public static function decodedPath(){
		return \Illuminate\Http\Request::decodedPath();
	}

	/**
	 * Get a segment from the URI (1 based index).
	 *
	 * @param string $index
	 * @param mixed $default
	 * @return string
	 * @static
	 */
	public static function segment($index, $default = null){
		return \Illuminate\Http\Request::segment($index, $default);
	}

	/**
	 * Get all of the segments for the request path.
	 *
	 * @return array
	 * @static
	 */
	public static function segments(){
		return \Illuminate\Http\Request::segments();
	}

	/**
	 * Determine if the current request URI matches a pattern.
	 *
	 * @param mixed  string
	 * @return bool
	 * @static
	 */
	public static function is(){
		return \Illuminate\Http\Request::is();
	}

	/**
	 * Determine if the request is the result of an AJAX call.
	 *
	 * @return bool
	 * @static
	 */
	public static function ajax(){
		return \Illuminate\Http\Request::ajax();
	}

	/**
	 * Determine if the request is over HTTPS.
	 *
	 * @return bool
	 * @static
	 */
	public static function secure(){
		return \Illuminate\Http\Request::secure();
	}

	/**
	 * Determine if the request contains a given input item key.
	 *
	 * @param string|array $key
	 * @return bool
	 * @static
	 */
	public static function exists($key){
		return \Illuminate\Http\Request::exists($key);
	}

	/**
	 * Determine if the request contains a non-emtpy value for an input item.
	 *
	 * @param string|array $key
	 * @return bool
	 * @static
	 */
	public static function has($key){
		return \Illuminate\Http\Request::has($key);
	}

	/**
	 * Get all of the input and files for the request.
	 *
	 * @return array
	 * @static
	 */
	public static function all(){
		return \Illuminate\Http\Request::all();
	}

	/**
	 * Retrieve an input item from the request.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return string
	 * @static
	 */
	public static function input($key = null, $default = null){
		return \Illuminate\Http\Request::input($key, $default);
	}

	/**
	 * Get a subset of the items from the input data.
	 *
	 * @param array $keys
	 * @return array
	 * @static
	 */
	public static function only($keys){
		return \Illuminate\Http\Request::only($keys);
	}

	/**
	 * Get all of the input except for a specified array of items.
	 *
	 * @param array $keys
	 * @return array
	 * @static
	 */
	public static function except($keys){
		return \Illuminate\Http\Request::except($keys);
	}

	/**
	 * Retrieve a query string item from the request.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return string
	 * @static
	 */
	public static function query($key = null, $default = null){
		return \Illuminate\Http\Request::query($key, $default);
	}

	/**
	 * Determine if a cookie is set on the request.
	 *
	 * @param string $key
	 * @return bool
	 * @static
	 */
	public static function hasCookie($key){
		return \Illuminate\Http\Request::hasCookie($key);
	}

	/**
	 * Retrieve a cookie from the request.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return string
	 * @static
	 */
	public static function cookie($key = null, $default = null){
		return \Illuminate\Http\Request::cookie($key, $default);
	}

	/**
	 * Retrieve a file from the request.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return \Symfony\Component\HttpFoundation\File\UploadedFile|array
	 * @static
	 */
	public static function file($key = null, $default = null){
		return \Illuminate\Http\Request::file($key, $default);
	}

	/**
	 * Determine if the uploaded data contains a file.
	 *
	 * @param string $key
	 * @return bool
	 * @static
	 */
	public static function hasFile($key){
		return \Illuminate\Http\Request::hasFile($key);
	}

	/**
	 * Retrieve a header from the request.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return string
	 * @static
	 */
	public static function header($key = null, $default = null){
		return \Illuminate\Http\Request::header($key, $default);
	}

	/**
	 * Retrieve a server variable from the request.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return string
	 * @static
	 */
	public static function server($key = null, $default = null){
		return \Illuminate\Http\Request::server($key, $default);
	}

	/**
	 * Retrieve an old input item.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed
	 * @static
	 */
	public static function old($key = null, $default = null){
		return \Illuminate\Http\Request::old($key, $default);
	}

	/**
	 * Flash the input for the current request to the session.
	 *
	 * @param string $filter
	 * @param array $keys
	 * @return void
	 * @static
	 */
	public static function flash($filter = null, $keys = array()){
		\Illuminate\Http\Request::flash($filter, $keys);
	}

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param mixed  string
	 * @return void
	 * @static
	 */
	public static function flashOnly($keys){
		\Illuminate\Http\Request::flashOnly($keys);
	}

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param mixed  string
	 * @return void
	 * @static
	 */
	public static function flashExcept($keys){
		\Illuminate\Http\Request::flashExcept($keys);
	}

	/**
	 * Flush all of the old input from the session.
	 *
	 * @return void
	 * @static
	 */
	public static function flush(){
		\Illuminate\Http\Request::flush();
	}

	/**
	 * Merge new input into the current request's input array.
	 *
	 * @param array $input
	 * @return void
	 * @static
	 */
	public static function merge($input){
		\Illuminate\Http\Request::merge($input);
	}

	/**
	 * Replace the input for the current request.
	 *
	 * @param array $input
	 * @return void
	 * @static
	 */
	public static function replace($input){
		\Illuminate\Http\Request::replace($input);
	}

	/**
	 * Get the JSON payload for the request.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed
	 * @static
	 */
	public static function json($key = null, $default = null){
		return \Illuminate\Http\Request::json($key, $default);
	}

	/**
	 * Determine if the request is sending JSON.
	 *
	 * @return bool
	 * @static
	 */
	public static function isJson(){
		return \Illuminate\Http\Request::isJson();
	}

	/**
	 * Determine if the current request is asking for JSON in return.
	 *
	 * @return bool
	 * @static
	 */
	public static function wantsJson(){
		return \Illuminate\Http\Request::wantsJson();
	}

	/**
	 * Get the data format expected in the response.
	 *
	 * @return string
	 * @static
	 */
	public static function format($default = 'html'){
		return \Illuminate\Http\Request::format($default);
	}

	/**
	 * Create an Illuminate request from a Symfony instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @return \Illuminate\Http\Request
	 * @static
	 */
	public static function createFromBase($request){
		return \Illuminate\Http\Request::createFromBase($request);
	}

	/**
	 * Get the session associated with the request.
	 *
	 * @return \Illuminate\Session\Store
	 * @throws \RuntimeException
	 * @static
	 */
	public static function session(){
		return \Illuminate\Http\Request::session();
	}

	/**
	 * Sets the parameters for this request.
	 *
	 * This method also re-initializes all properties.
	 *
	 * @param array $query The GET parameters
	 * @param array $request The POST parameters
	 * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array $cookies The COOKIE parameters
	 * @param array $files The FILES parameters
	 * @param array $server The SERVER parameters
	 * @param string $content The raw body data
	 * @api
	 * @static
	 */
	public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
	}

	/**
	 * Creates a new request with values from PHP's super globals.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request A new request
	 * @api
	 * @static
	 */
	public static function createFromGlobals(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::createFromGlobals();
	}

	/**
	 * Creates a Request based on a given URI and configuration.
	 *
	 * The information contained in the URI always take precedence
	 * over the other information (server and parameters).
	 *
	 * @param string $uri The URI
	 * @param string $method The HTTP method
	 * @param array $parameters The query (GET) or request (POST) parameters
	 * @param array $cookies The request cookies ($_COOKIE)
	 * @param array $files The request files ($_FILES)
	 * @param array $server The server parameters ($_SERVER)
	 * @param string $content The raw body data
	 * @return \Symfony\Component\HttpFoundation\Request A Request instance
	 * @api
	 * @static
	 */
	public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
	}

	/**
	 * Sets a callable able to create a Request instance.
	 *
	 * This is mainly useful when you need to override the Request class
	 * to keep BC with an existing system. It should not be used for any
	 * other purpose.
	 *
	 * @param callable|null $callable A PHP callable
	 * @static
	 */
	public static function setFactory($callable){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::setFactory($callable);
	}

	/**
	 * Clones a request and overrides some of its parameters.
	 *
	 * @param array $query The GET parameters
	 * @param array $request The POST parameters
	 * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array $cookies The COOKIE parameters
	 * @param array $files The FILES parameters
	 * @param array $server The SERVER parameters
	 * @return \Symfony\Component\HttpFoundation\Request The duplicated request
	 * @api
	 * @static
	 */
	public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
	}

	/**
	 * Overrides the PHP global variables according to this request instance.
	 *
	 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
	 * $_FILES is never override, see rfc1867
	 *
	 * @api
	 * @static
	 */
	public static function overrideGlobals(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::overrideGlobals();
	}

	/**
	 * Sets a list of trusted proxies.
	 *
	 * You should only list the reverse proxies that you manage directly.
	 *
	 * @param array $proxies A list of trusted proxies
	 * @api
	 * @static
	 */
	public static function setTrustedProxies($proxies){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::setTrustedProxies($proxies);
	}

	/**
	 * Gets the list of trusted proxies.
	 *
	 * @return array An array of trusted proxies.
	 * @static
	 */
	public static function getTrustedProxies(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getTrustedProxies();
	}

	/**
	 * Sets a list of trusted host patterns.
	 *
	 * You should only list the hosts you manage using regexs.
	 *
	 * @param array $hostPatterns A list of trusted host patterns
	 * @static
	 */
	public static function setTrustedHosts($hostPatterns){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
	}

	/**
	 * Gets the list of trusted host patterns.
	 *
	 * @return array An array of trusted host patterns.
	 * @static
	 */
	public static function getTrustedHosts(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getTrustedHosts();
	}

	/**
	 * Sets the name for trusted headers.
	 *
	 * The following header keys are supported:
	 *
	 *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
	 *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getClientHost())
	 *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getClientPort())
	 *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
	 *
	 * Setting an empty value allows to disable the trusted header for the given key.
	 *
	 * @param string $key The header key
	 * @param string $value The header name
	 * @throws \InvalidArgumentException
	 * @static
	 */
	public static function setTrustedHeaderName($key, $value){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
	}

	/**
	 * Gets the trusted proxy header name.
	 *
	 * @param string $key The header key
	 * @return string The header name
	 * @throws \InvalidArgumentException
	 * @static
	 */
	public static function getTrustedHeaderName($key){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getTrustedHeaderName($key);
	}

	/**
	 * Normalizes a query string.
	 *
	 * It builds a normalized query string, where keys/value pairs are alphabetized,
	 * have consistent escaping and unneeded delimiters are removed.
	 *
	 * @param string $qs Query string
	 * @return string A normalized query string for the Request
	 * @static
	 */
	public static function normalizeQueryString($qs){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::normalizeQueryString($qs);
	}

	/**
	 * Enables support for the _method request parameter to determine the intended HTTP method.
	 *
	 * Be warned that enabling this feature might lead to CSRF issues in your code.
	 * Check that you are using CSRF tokens when required.
	 *
	 * The HTTP method can only be overridden when the real HTTP method is POST.
	 *
	 * @static
	 */
	public static function enableHttpMethodParameterOverride(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
	}

	/**
	 * Checks whether support for the _method request parameter is enabled.
	 *
	 * @return bool True when the _method request parameter is enabled, false otherwise
	 * @static
	 */
	public static function getHttpMethodParameterOverride(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getHttpMethodParameterOverride();
	}

	/**
	 * Gets a "parameter" value.
	 *
	 * This method is mainly useful for libraries that want to provide some flexibility.
	 *
	 * Order of precedence: GET, PATH, POST
	 *
	 * Avoid using this method in controllers:
	 *
	 *  * slow
	 *  * prefer to get from a "named" source
	 *
	 * It is better to explicitly get request parameters from the appropriate
	 * public property instead (query, attributes, request).
	 *
	 * @param string $key the key
	 * @param mixed $default the default value
	 * @param bool $deep is parameter deep in multidimensional array
	 * @return mixed
	 * @static
	 */
	public static function get($key, $default = null, $deep = false){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::get($key, $default, $deep);
	}

	/**
	 * Gets the Session.
	 *
	 * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
	 * @api
	 * @static
	 */
	public static function getSession(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getSession();
	}

	/**
	 * Whether the request contains a Session which was started in one of the
	 * previous requests.
	 *
	 * @return bool
	 * @api
	 * @static
	 */
	public static function hasPreviousSession(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::hasPreviousSession();
	}

	/**
	 * Whether the request contains a Session object.
	 *
	 * This method does not give any information about the state of the session object,
	 * like whether the session is started or not. It is just a way to check if this Request
	 * is associated with a Session instance.
	 *
	 * @return bool true when the Request contains a Session object, false otherwise
	 * @api
	 * @static
	 */
	public static function hasSession(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::hasSession();
	}

	/**
	 * Sets the Session.
	 *
	 * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
	 * @api
	 * @static
	 */
	public static function setSession($session){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::setSession($session);
	}

	/**
	 * Returns the client IP addresses.
	 *
	 * In the returned array the most trusted IP address is first, and the
	 * least trusted one last. The "real" client IP address is the last one,
	 * but this is also the least trusted one. Trusted proxies are stripped.
	 *
	 * Use this method carefully; you should use getClientIp() instead.
	 *
	 * @return array The client IP addresses
	 * @see getClientIp()
	 * @static
	 */
	public static function getClientIps(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getClientIps();
	}

	/**
	 * Returns the client IP address.
	 *
	 * This method can read the client IP address from the "X-Forwarded-For" header
	 * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
	 * header value is a comma+space separated list of IP addresses, the left-most
	 * being the original client, and each successive proxy that passed the request
	 * adding the IP address where it received the request from.
	 *
	 * If your reverse proxy uses a different header name than "X-Forwarded-For",
	 * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-ip" key.
	 *
	 * @return string The client IP address
	 * @see getClientIps()
	 * @see http://en.wikipedia.org/wiki/X-Forwarded-For
	 * @api
	 * @static
	 */
	public static function getClientIp(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getClientIp();
	}

	/**
	 * Returns current script name.
	 *
	 * @return string
	 * @api
	 * @static
	 */
	public static function getScriptName(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getScriptName();
	}

	/**
	 * Returns the path being requested relative to the executed script.
	 *
	 * The path info always starts with a /.
	 *
	 * Suppose this request is instantiated from /mysite on localhost:
	 *
	 *  * http://localhost/mysite              returns an empty string
	 *  * http://localhost/mysite/about        returns '/about'
	 *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
	 *  * http://localhost/mysite/about?var=1  returns '/about'
	 *
	 * @return string The raw path (i.e. not urldecoded)
	 * @api
	 * @static
	 */
	public static function getPathInfo(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getPathInfo();
	}

	/**
	 * Returns the root path from which this request is executed.
	 *
	 * Suppose that an index.php file instantiates this request object:
	 *
	 *  * http://localhost/index.php         returns an empty string
	 *  * http://localhost/index.php/page    returns an empty string
	 *  * http://localhost/web/index.php     returns '/web'
	 *  * http://localhost/we%20b/index.php  returns '/we%20b'
	 *
	 * @return string The raw path (i.e. not urldecoded)
	 * @api
	 * @static
	 */
	public static function getBasePath(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getBasePath();
	}

	/**
	 * Returns the root URL from which this request is executed.
	 *
	 * The base URL never ends with a /.
	 *
	 * This is similar to getBasePath(), except that it also includes the
	 * script filename (e.g. index.php) if one exists.
	 *
	 * @return string The raw URL (i.e. not urldecoded)
	 * @api
	 * @static
	 */
	public static function getBaseUrl(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getBaseUrl();
	}

	/**
	 * Gets the request's scheme.
	 *
	 * @return string
	 * @api
	 * @static
	 */
	public static function getScheme(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getScheme();
	}

	/**
	 * Returns the port on which the request is made.
	 *
	 * This method can read the client port from the "X-Forwarded-Port" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 *
	 * The "X-Forwarded-Port" header must contain the client port.
	 *
	 * If your reverse proxy uses a different header name than "X-Forwarded-Port",
	 * configure it via "setTrustedHeaderName()" with the "client-port" key.
	 *
	 * @return string
	 * @api
	 * @static
	 */
	public static function getPort(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getPort();
	}

	/**
	 * Returns the user.
	 *
	 * @return string|null
	 * @static
	 */
	public static function getUser(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getUser();
	}

	/**
	 * Returns the password.
	 *
	 * @return string|null
	 * @static
	 */
	public static function getPassword(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getPassword();
	}

	/**
	 * Gets the user info.
	 *
	 * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
	 * @static
	 */
	public static function getUserInfo(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getUserInfo();
	}

	/**
	 * Returns the HTTP host being requested.
	 *
	 * The port name will be appended to the host if it's non-standard.
	 *
	 * @return string
	 * @api
	 * @static
	 */
	public static function getHttpHost(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getHttpHost();
	}

	/**
	 * Returns the requested URI (path and query string).
	 *
	 * @return string The raw URI (i.e. not URI decoded)
	 * @api
	 * @static
	 */
	public static function getRequestUri(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getRequestUri();
	}

	/**
	 * Gets the scheme and HTTP host.
	 *
	 * If the URL was called with basic authentication, the user
	 * and the password are not added to the generated string.
	 *
	 * @return string The scheme and HTTP host
	 * @static
	 */
	public static function getSchemeAndHttpHost(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getSchemeAndHttpHost();
	}

	/**
	 * Generates a normalized URI (URL) for the Request.
	 *
	 * @return string A normalized URI (URL) for the Request
	 * @see getQueryString()
	 * @api
	 * @static
	 */
	public static function getUri(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getUri();
	}

	/**
	 * Generates a normalized URI for the given path.
	 *
	 * @param string $path A path to use instead of the current one
	 * @return string The normalized URI for the path
	 * @api
	 * @static
	 */
	public static function getUriForPath($path){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getUriForPath($path);
	}

	/**
	 * Generates the normalized query string for the Request.
	 *
	 * It builds a normalized query string, where keys/value pairs are alphabetized
	 * and have consistent escaping.
	 *
	 * @return string|null A normalized query string for the Request
	 * @api
	 * @static
	 */
	public static function getQueryString(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getQueryString();
	}

	/**
	 * Checks whether the request is secure or not.
	 *
	 * This method can read the client port from the "X-Forwarded-Proto" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 *
	 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
	 *
	 * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
	 * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-proto" key.
	 *
	 * @return bool
	 * @api
	 * @static
	 */
	public static function isSecure(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::isSecure();
	}

	/**
	 * Returns the host name.
	 *
	 * This method can read the client port from the "X-Forwarded-Host" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 *
	 * The "X-Forwarded-Host" header must contain the client host name.
	 *
	 * If your reverse proxy uses a different header name than "X-Forwarded-Host",
	 * configure it via "setTrustedHeaderName()" with the "client-host" key.
	 *
	 * @return string
	 * @throws \UnexpectedValueException when the host name is invalid
	 * @api
	 * @static
	 */
	public static function getHost(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getHost();
	}

	/**
	 * Sets the request method.
	 *
	 * @param string $method
	 * @api
	 * @static
	 */
	public static function setMethod($method){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::setMethod($method);
	}

	/**
	 * Gets the request "intended" method.
	 *
	 * If the X-HTTP-Method-Override header is set, and if the method is a POST,
	 * then it is used to determine the "real" intended HTTP method.
	 *
	 * The _method request parameter can also be used to determine the HTTP method,
	 * but only if enableHttpMethodParameterOverride() has been called.
	 *
	 * The method is always an uppercased string.
	 *
	 * @return string The request method
	 * @api
	 * @see getRealMethod
	 * @static
	 */
	public static function getMethod(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getMethod();
	}

	/**
	 * Gets the "real" request method.
	 *
	 * @return string The request method
	 * @see getMethod
	 * @static
	 */
	public static function getRealMethod(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getRealMethod();
	}

	/**
	 * Gets the mime type associated with the format.
	 *
	 * @param string $format The format
	 * @return string The associated mime type (null if not found)
	 * @api
	 * @static
	 */
	public static function getMimeType($format){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getMimeType($format);
	}

	/**
	 * Gets the format associated with the mime type.
	 *
	 * @param string $mimeType The associated mime type
	 * @return string|null The format (null if not found)
	 * @api
	 * @static
	 */
	public static function getFormat($mimeType){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getFormat($mimeType);
	}

	/**
	 * Associates a format with mime types.
	 *
	 * @param string $format The format
	 * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
	 * @api
	 * @static
	 */
	public static function setFormat($format, $mimeTypes){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
	}

	/**
	 * Gets the request format.
	 *
	 * Here is the process to determine the format:
	 *
	 *  * format defined by the user (with setRequestFormat())
	 *  * _format request parameter
	 *  * $default
	 *
	 * @param string $default The default format
	 * @return string The request format
	 * @api
	 * @static
	 */
	public static function getRequestFormat($default = 'html'){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getRequestFormat($default);
	}

	/**
	 * Sets the request format.
	 *
	 * @param string $format The request format.
	 * @api
	 * @static
	 */
	public static function setRequestFormat($format){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::setRequestFormat($format);
	}

	/**
	 * Gets the format associated with the request.
	 *
	 * @return string|null The format (null if no content type is present)
	 * @api
	 * @static
	 */
	public static function getContentType(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getContentType();
	}

	/**
	 * Sets the default locale.
	 *
	 * @param string $locale
	 * @api
	 * @static
	 */
	public static function setDefaultLocale($locale){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::setDefaultLocale($locale);
	}

	/**
	 * Get the default locale.
	 *
	 * @return string
	 * @static
	 */
	public static function getDefaultLocale(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getDefaultLocale();
	}

	/**
	 * Sets the locale.
	 *
	 * @param string $locale
	 * @api
	 * @static
	 */
	public static function setLocale($locale){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::setLocale($locale);
	}

	/**
	 * Get the locale.
	 *
	 * @return string
	 * @static
	 */
	public static function getLocale(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getLocale();
	}

	/**
	 * Checks if the request method is of specified type.
	 *
	 * @param string $method Uppercase request method (GET, POST etc).
	 * @return bool
	 * @static
	 */
	public static function isMethod($method){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::isMethod($method);
	}

	/**
	 * Checks whether the method is safe or not.
	 *
	 * @return bool
	 * @api
	 * @static
	 */
	public static function isMethodSafe(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::isMethodSafe();
	}

	/**
	 * Returns the request body content.
	 *
	 * @param bool $asResource If true, a resource will be returned
	 * @return string|resource The request body content or a resource to read the body stream.
	 * @throws \LogicException
	 * @static
	 */
	public static function getContent($asResource = false){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getContent($asResource);
	}

	/**
	 * Gets the Etags.
	 *
	 * @return array The entity tags
	 * @static
	 */
	public static function getETags(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getETags();
	}

	/**
	 *
	 *
	 * @return bool
	 * @static
	 */
	public static function isNoCache(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::isNoCache();
	}

	/**
	 * Returns the preferred language.
	 *
	 * @param array $locales An array of ordered available locales
	 * @return string|null The preferred locale
	 * @api
	 * @static
	 */
	public static function getPreferredLanguage($locales = null){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getPreferredLanguage($locales);
	}

	/**
	 * Gets a list of languages acceptable by the client browser.
	 *
	 * @return array Languages ordered in the user browser preferences
	 * @api
	 * @static
	 */
	public static function getLanguages(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getLanguages();
	}

	/**
	 * Gets a list of charsets acceptable by the client browser.
	 *
	 * @return array List of charsets in preferable order
	 * @api
	 * @static
	 */
	public static function getCharsets(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getCharsets();
	}

	/**
	 * Gets a list of encodings acceptable by the client browser.
	 *
	 * @return array List of encodings in preferable order
	 * @static
	 */
	public static function getEncodings(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getEncodings();
	}

	/**
	 * Gets a list of content types acceptable by the client browser
	 *
	 * @return array List of content types in preferable order
	 * @api
	 * @static
	 */
	public static function getAcceptableContentTypes(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::getAcceptableContentTypes();
	}

	/**
	 * Returns true if the request is a XMLHttpRequest.
	 *
	 * It works if your JavaScript library set an X-Requested-With HTTP header.
	 * It is known to work with common JavaScript frameworks:
	 *
	 * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
	 * @return bool true if the request is an XMLHttpRequest, false otherwise
	 * @api
	 * @static
	 */
	public static function isXmlHttpRequest(){
		//Method inherited from \Symfony\Component\HttpFoundation\Request
		return \Illuminate\Http\Request::isXmlHttpRequest();
	}

}