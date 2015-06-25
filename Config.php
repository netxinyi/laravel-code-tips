<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 18:57
 */

class Config extends \Illuminate\Support\Facades\Config{

	/**
	 * Determine if the given configuration value exists.
	 *
	 * @param string $key
	 * @return bool
	 * @static
	 */
	public static function has($key){
		return \Illuminate\Config\Repository::has($key);
	}

	/**
	 * Determine if a configuration group exists.
	 *
	 * @param string $key
	 * @return bool
	 * @static
	 */
	public static function hasGroup($key){
		return \Illuminate\Config\Repository::hasGroup($key);
	}

	/**
	 * Get the specified configuration value.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed
	 * @static
	 */
	public static function get($key, $default = null){
		return \Illuminate\Config\Repository::get($key, $default);
	}

	/**
	 * Set a given configuration value.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 * @static
	 */
	public static function set($key, $value){
		\Illuminate\Config\Repository::set($key, $value);
	}

	/**
	 * Register a package for cascading configuration.
	 *
	 * @param string $package
	 * @param string $hint
	 * @param string $namespace
	 * @return void
	 * @static
	 */
	public static function package($package, $hint, $namespace = null){
		\Illuminate\Config\Repository::package($package, $hint, $namespace);
	}

	/**
	 * Register an after load callback for a given namespace.
	 *
	 * @param string $namespace
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function afterLoading($namespace, $callback){
		\Illuminate\Config\Repository::afterLoading($namespace, $callback);
	}

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string $namespace
	 * @param string $hint
	 * @return void
	 * @static
	 */
	public static function addNamespace($namespace, $hint){
		\Illuminate\Config\Repository::addNamespace($namespace, $hint);
	}

	/**
	 * Returns all registered namespaces with the config
	 * loader.
	 *
	 * @return array
	 * @static
	 */
	public static function getNamespaces(){
		return \Illuminate\Config\Repository::getNamespaces();
	}

	/**
	 * Get the loader implementation.
	 *
	 * @return \Illuminate\Config\LoaderInterface
	 * @static
	 */
	public static function getLoader(){
		return \Illuminate\Config\Repository::getLoader();
	}

	/**
	 * Set the loader implementation.
	 *
	 * @param \Illuminate\Config\LoaderInterface $loader
	 * @return void
	 * @static
	 */
	public static function setLoader($loader){
		\Illuminate\Config\Repository::setLoader($loader);
	}

	/**
	 * Get the current configuration environment.
	 *
	 * @return string
	 * @static
	 */
	public static function getEnvironment(){
		return \Illuminate\Config\Repository::getEnvironment();
	}

	/**
	 * Get the after load callback array.
	 *
	 * @return array
	 * @static
	 */
	public static function getAfterLoadCallbacks(){
		return \Illuminate\Config\Repository::getAfterLoadCallbacks();
	}

	/**
	 * Get all of the configuration items.
	 *
	 * @return array
	 * @static
	 */
	public static function getItems(){
		return \Illuminate\Config\Repository::getItems();
	}

	/**
	 * Determine if the given configuration option exists.
	 *
	 * @param string $key
	 * @return bool
	 * @static
	 */
	public static function offsetExists($key){
		return \Illuminate\Config\Repository::offsetExists($key);
	}

	/**
	 * Get a configuration option.
	 *
	 * @param string $key
	 * @return mixed
	 * @static
	 */
	public static function offsetGet($key){
		return \Illuminate\Config\Repository::offsetGet($key);
	}

	/**
	 * Set a configuration option.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 * @static
	 */
	public static function offsetSet($key, $value){
		\Illuminate\Config\Repository::offsetSet($key, $value);
	}

	/**
	 * Unset a configuration option.
	 *
	 * @param string $key
	 * @return void
	 * @static
	 */
	public static function offsetUnset($key){
		\Illuminate\Config\Repository::offsetUnset($key);
	}

	/**
	 * Parse a key into namespace, group, and item.
	 *
	 * @param string $key
	 * @return array
	 * @static
	 */
	public static function parseKey($key){
		//Method inherited from \Illuminate\Support\NamespacedItemResolver
		return \Illuminate\Config\Repository::parseKey($key);
	}

	/**
	 * Set the parsed value of a key.
	 *
	 * @param string $key
	 * @param array $parsed
	 * @return void
	 * @static
	 */
	public static function setParsedKey($key, $parsed){
		//Method inherited from \Illuminate\Support\NamespacedItemResolver
		\Illuminate\Config\Repository::setParsedKey($key, $parsed);
	}

}