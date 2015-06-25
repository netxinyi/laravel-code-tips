<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:27
 */

class URL extends \Illuminate\Support\Facades\URL{

	/**
	 * Get the full URL for the current request.
	 *
	 * @return string
	 * @static
	 */
	public static function full(){
		return \Illuminate\Routing\UrlGenerator::full();
	}

	/**
	 * Get the current URL for the request.
	 *
	 * @return string
	 * @static
	 */
	public static function current(){
		return \Illuminate\Routing\UrlGenerator::current();
	}

	/**
	 * Get the URL for the previous request.
	 *
	 * @return string
	 * @static
	 */
	public static function previous(){
		return \Illuminate\Routing\UrlGenerator::previous();
	}

	/**
	 * Generate a absolute URL to the given path.
	 *
	 * @param string $path
	 * @param mixed $extra
	 * @param bool $secure
	 * @return string
	 * @static
	 */
	public static function to($path, $extra = array(), $secure = null){
		return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
	}

	/**
	 * Generate a secure, absolute URL to the given path.
	 *
	 * @param string $path
	 * @param array $parameters
	 * @return string
	 * @static
	 */
	public static function secure($path, $parameters = array()){
		return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
	}

	/**
	 * Generate a URL to an application asset.
	 *
	 * @param string $path
	 * @param bool $secure
	 * @return string
	 * @static
	 */
	public static function asset($path, $secure = null){
		return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
	}

	/**
	 * Generate a URL to a secure asset.
	 *
	 * @param string $path
	 * @return string
	 * @static
	 */
	public static function secureAsset($path){
		return \Illuminate\Routing\UrlGenerator::secureAsset($path);
	}

	/**
	 * Get the URL to a named route.
	 *
	 * @param string $name
	 * @param mixed $parameters
	 * @param bool $absolute
	 * @param \Illuminate\Routing\Route $route
	 * @return string
	 * @throws \InvalidArgumentException
	 * @static
	 */
	public static function route($name, $parameters = array(), $absolute = true, $route = null){
		return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute, $route);
	}

	/**
	 * Get the URL to a controller action.
	 *
	 * @param string $action
	 * @param mixed $parameters
	 * @param bool $absolute
	 * @return string
	 * @static
	 */
	public static function action($action, $parameters = array(), $absolute = true){
		return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
	}

	/**
	 * Determine if the given path is a valid URL.
	 *
	 * @param string $path
	 * @return bool
	 * @static
	 */
	public static function isValidUrl($path){
		return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
	}

	/**
	 * Get the request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static
	 */
	public static function getRequest(){
		return \Illuminate\Routing\UrlGenerator::getRequest();
	}

	/**
	 * Set the current request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @return void
	 * @static
	 */
	public static function setRequest($request){
		\Illuminate\Routing\UrlGenerator::setRequest($request);
	}

}