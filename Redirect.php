<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:25
 */

class Redirect extends \Illuminate\Support\Facades\Redirect{

	/**
	 * Create a new redirect response to the "home" route.
	 *
	 * @param int $status
	 * @return \Illuminate\Http\RedirectResponse
	 * @static
	 */
	public static function home($status = 302){
		return \Illuminate\Routing\Redirector::home($status);
	}

	/**
	 * Create a new redirect response to the previous location.
	 *
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static
	 */
	public static function back($status = 302, $headers = array()){
		return \Illuminate\Routing\Redirector::back($status, $headers);
	}

	/**
	 * Create a new redirect response to the current URI.
	 *
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static
	 */
	public static function refresh($status = 302, $headers = array()){
		return \Illuminate\Routing\Redirector::refresh($status, $headers);
	}

	/**
	 * Create a new redirect response, while putting the current URL in the session.
	 *
	 * @param string $path
	 * @param int $status
	 * @param array $headers
	 * @param bool $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static
	 */
	public static function guest($path, $status = 302, $headers = array(), $secure = null){
		return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
	}

	/**
	 * Create a new redirect response to the previously intended location.
	 *
	 * @param string $default
	 * @param int $status
	 * @param array $headers
	 * @param bool $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static
	 */
	public static function intended($default = '/', $status = 302, $headers = array(), $secure = null){
		return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
	}

	/**
	 * Create a new redirect response to the given path.
	 *
	 * @param string $path
	 * @param int $status
	 * @param array $headers
	 * @param bool $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static
	 */
	public static function to($path, $status = 302, $headers = array(), $secure = null){
		return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
	}

	/**
	 * Create a new redirect response to an external URL (no validation).
	 *
	 * @param string $path
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static
	 */
	public static function away($path, $status = 302, $headers = array()){
		return \Illuminate\Routing\Redirector::away($path, $status, $headers);
	}

	/**
	 * Create a new redirect response to the given HTTPS path.
	 *
	 * @param string $path
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static
	 */
	public static function secure($path, $status = 302, $headers = array()){
		return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
	}

	/**
	 * Create a new redirect response to a named route.
	 *
	 * @param string $route
	 * @param array $parameters
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static
	 */
	public static function route($route, $parameters = array(), $status = 302, $headers = array()){
		return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
	}

	/**
	 * Create a new redirect response to a controller action.
	 *
	 * @param string $action
	 * @param array $parameters
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static
	 */
	public static function action($action, $parameters = array(), $status = 302, $headers = array()){
		return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
	}

	/**
	 * Get the URL generator instance.
	 *
	 * @return \Illuminate\Routing\UrlGenerator
	 * @static
	 */
	public static function getUrlGenerator(){
		return \Illuminate\Routing\Redirector::getUrlGenerator();
	}

	/**
	 * Set the active session store.
	 *
	 * @param \Illuminate\Session\Store $session
	 * @return void
	 * @static
	 */
	public static function setSession($session){
		\Illuminate\Routing\Redirector::setSession($session);
	}

}