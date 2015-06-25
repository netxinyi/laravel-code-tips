<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:26
 */

class Session extends \Illuminate\Support\Facades\Session{

	/**
	 * Get the session configuration.
	 *
	 * @return array
	 * @static
	 */
	public static function getSessionConfig(){
		return \Illuminate\Session\SessionManager::getSessionConfig();
	}

	/**
	 * Get the default session driver name.
	 *
	 * @return string
	 * @static
	 */
	public static function getDefaultDriver(){
		return \Illuminate\Session\SessionManager::getDefaultDriver();
	}

	/**
	 * Set the default session driver name.
	 *
	 * @param string $name
	 * @return void
	 * @static
	 */
	public static function setDefaultDriver($name){
		\Illuminate\Session\SessionManager::setDefaultDriver($name);
	}

	/**
	 * Get a driver instance.
	 *
	 * @param string $driver
	 * @return mixed
	 * @static
	 */
	public static function driver($driver = null){
		//Method inherited from \Illuminate\Support\Manager
		return \Illuminate\Session\SessionManager::driver($driver);
	}

	/**
	 * Register a custom driver creator Closure.
	 *
	 * @param string $driver
	 * @param \Closure $callback
	 * @return \Illuminate\Support\Manager|static
	 * @static
	 */
	public static function extend($driver, $callback){
		//Method inherited from \Illuminate\Support\Manager
		return \Illuminate\Session\SessionManager::extend($driver, $callback);
	}

	/**
	 * Get all of the created "drivers".
	 *
	 * @return array
	 * @static
	 */
	public static function getDrivers(){
		//Method inherited from \Illuminate\Support\Manager
		return \Illuminate\Session\SessionManager::getDrivers();
	}

	/**
	 * Starts the session storage.
	 *
	 * @return bool True if session started.
	 * @throws \RuntimeException If session fails to start.
	 * @api
	 * @static
	 */
	public static function start(){
		return \Illuminate\Session\Store::start();
	}

	/**
	 * Returns the session ID.
	 *
	 * @return string The session ID.
	 * @api
	 * @static
	 */
	public static function getId(){
		return \Illuminate\Session\Store::getId();
	}

	/**
	 * Sets the session ID
	 *
	 * @param string $id
	 * @api
	 * @static
	 */
	public static function setId($id){
		return \Illuminate\Session\Store::setId($id);
	}

	/**
	 * Returns the session name.
	 *
	 * @return mixed The session name.
	 * @api
	 * @static
	 */
	public static function getName(){
		return \Illuminate\Session\Store::getName();
	}

	/**
	 * Sets the session name.
	 *
	 * @param string $name
	 * @api
	 * @static
	 */
	public static function setName($name){
		return \Illuminate\Session\Store::setName($name);
	}

	/**
	 * Invalidates the current session.
	 *
	 * Clears all session attributes and flashes and regenerates the
	 * session and deletes the old session from persistence.
	 *
	 * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
	 *                          will leave the system settings unchanged, 0 sets the cookie
	 *                          to expire with browser session. Time is in seconds, and is
	 *                          not a Unix timestamp.
	 * @return bool True if session invalidated, false if error.
	 * @api
	 * @static
	 */
	public static function invalidate($lifetime = null){
		return \Illuminate\Session\Store::invalidate($lifetime);
	}

	/**
	 * Migrates the current session to a new session id while maintaining all
	 * session attributes.
	 *
	 * @param bool $destroy Whether to delete the old session or leave it to garbage collection.
	 * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
	 *                          will leave the system settings unchanged, 0 sets the cookie
	 *                          to expire with browser session. Time is in seconds, and is
	 *                          not a Unix timestamp.
	 * @return bool True if session migrated, false if error.
	 * @api
	 * @static
	 */
	public static function migrate($destroy = false, $lifetime = null){
		return \Illuminate\Session\Store::migrate($destroy, $lifetime);
	}

	/**
	 * Generate a new session identifier.
	 *
	 * @param bool $destroy
	 * @return bool
	 * @static
	 */
	public static function regenerate($destroy = false){
		return \Illuminate\Session\Store::regenerate($destroy);
	}

	/**
	 * Force the session to be saved and closed.
	 *
	 * This method is generally not required for real sessions as
	 * the session will be automatically saved at the end of
	 * code execution.
	 *
	 * @static
	 */
	public static function save(){
		return \Illuminate\Session\Store::save();
	}

	/**
	 * Age the flash data for the session.
	 *
	 * @return void
	 * @static
	 */
	public static function ageFlashData(){
		\Illuminate\Session\Store::ageFlashData();
	}

	/**
	 * Checks if an attribute is defined.
	 *
	 * @param string $name The attribute name
	 * @return bool true if the attribute is defined, false otherwise
	 * @api
	 * @static
	 */
	public static function has($name){
		return \Illuminate\Session\Store::has($name);
	}

	/**
	 * Returns an attribute.
	 *
	 * @param string $name The attribute name
	 * @param mixed $default The default value if not found.
	 * @return mixed
	 * @api
	 * @static
	 */
	public static function get($name, $default = null){
		return \Illuminate\Session\Store::get($name, $default);
	}

	/**
	 * Determine if the session contains old input.
	 *
	 * @param string $key
	 * @return bool
	 * @static
	 */
	public static function hasOldInput($key = null){
		return \Illuminate\Session\Store::hasOldInput($key);
	}

	/**
	 * Get the requested item from the flashed input array.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed
	 * @static
	 */
	public static function getOldInput($key = null, $default = null){
		return \Illuminate\Session\Store::getOldInput($key, $default);
	}

	/**
	 * Sets an attribute.
	 *
	 * @param string $name
	 * @param mixed $value
	 * @api
	 * @static
	 */
	public static function set($name, $value){
		return \Illuminate\Session\Store::set($name, $value);
	}

	/**
	 * Put a key / value pair or array of key / value pairs in the session.
	 *
	 * @param string|array $key
	 * @param mixed|null $value
	 * @return void
	 * @static
	 */
	public static function put($key, $value){
		\Illuminate\Session\Store::put($key, $value);
	}

	/**
	 * Push a value onto a session array.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 * @static
	 */
	public static function push($key, $value){
		\Illuminate\Session\Store::push($key, $value);
	}

	/**
	 * Flash a key / value pair to the session.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 * @static
	 */
	public static function flash($key, $value){
		\Illuminate\Session\Store::flash($key, $value);
	}

	/**
	 * Flash an input array to the session.
	 *
	 * @param array $value
	 * @return void
	 * @static
	 */
	public static function flashInput($value){
		\Illuminate\Session\Store::flashInput($value);
	}

	/**
	 * Reflash all of the session flash data.
	 *
	 * @return void
	 * @static
	 */
	public static function reflash(){
		\Illuminate\Session\Store::reflash();
	}

	/**
	 * Reflash a subset of the current flash data.
	 *
	 * @param array|mixed $keys
	 * @return void
	 * @static
	 */
	public static function keep($keys = null){
		\Illuminate\Session\Store::keep($keys);
	}

	/**
	 * Returns attributes.
	 *
	 * @return array Attributes
	 * @api
	 * @static
	 */
	public static function all(){
		return \Illuminate\Session\Store::all();
	}

	/**
	 * Sets attributes.
	 *
	 * @param array $attributes Attributes
	 * @static
	 */
	public static function replace($attributes){
		return \Illuminate\Session\Store::replace($attributes);
	}

	/**
	 * Removes an attribute.
	 *
	 * @param string $name
	 * @return mixed The removed value or null when it does not exist
	 * @api
	 * @static
	 */
	public static function remove($name){
		return \Illuminate\Session\Store::remove($name);
	}

	/**
	 * Remove an item from the session.
	 *
	 * @param string $key
	 * @return void
	 * @static
	 */
	public static function forget($key){
		\Illuminate\Session\Store::forget($key);
	}

	/**
	 * Clears all attributes.
	 *
	 * @api
	 * @static
	 */
	public static function clear(){
		return \Illuminate\Session\Store::clear();
	}

	/**
	 * Remove all of the items from the session.
	 *
	 * @return void
	 * @static
	 */
	public static function flush(){
		\Illuminate\Session\Store::flush();
	}

	/**
	 * Checks if the session was started.
	 *
	 * @return bool
	 * @static
	 */
	public static function isStarted(){
		return \Illuminate\Session\Store::isStarted();
	}

	/**
	 * Registers a SessionBagInterface with the session.
	 *
	 * @param \Symfony\Component\HttpFoundation\Session\SessionBagInterface $bag
	 * @static
	 */
	public static function registerBag($bag){
		return \Illuminate\Session\Store::registerBag($bag);
	}

	/**
	 * Gets a bag instance by name.
	 *
	 * @param string $name
	 * @return \Symfony\Component\HttpFoundation\Session\SessionBagInterface
	 * @static
	 */
	public static function getBag($name){
		return \Illuminate\Session\Store::getBag($name);
	}

	/**
	 * Gets session meta.
	 *
	 * @return \Symfony\Component\HttpFoundation\Session\MetadataBag
	 * @static
	 */
	public static function getMetadataBag(){
		return \Illuminate\Session\Store::getMetadataBag();
	}

	/**
	 * Get the raw bag data array for a given bag.
	 *
	 * @param string $name
	 * @return array
	 * @static
	 */
	public static function getBagData($name){
		return \Illuminate\Session\Store::getBagData($name);
	}

	/**
	 * Get the CSRF token value.
	 *
	 * @return string
	 * @static
	 */
	public static function token(){
		return \Illuminate\Session\Store::token();
	}

	/**
	 * Get the CSRF token value.
	 *
	 * @return string
	 * @static
	 */
	public static function getToken(){
		return \Illuminate\Session\Store::getToken();
	}

	/**
	 * Regenerate the CSRF token value.
	 *
	 * @return void
	 * @static
	 */
	public static function regenerateToken(){
		\Illuminate\Session\Store::regenerateToken();
	}

	/**
	 * Get the underlying session handler implementation.
	 *
	 * @return \SessionHandlerInterface
	 * @static
	 */
	public static function getHandler(){
		return \Illuminate\Session\Store::getHandler();
	}

	/**
	 * Determine if the session handler needs a request.
	 *
	 * @return bool
	 * @static
	 */
	public static function handlerNeedsRequest(){
		return \Illuminate\Session\Store::handlerNeedsRequest();
	}

	/**
	 * Set the request on the handler instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @return void
	 * @static
	 */
	public static function setRequestOnHandler($request){
		\Illuminate\Session\Store::setRequestOnHandler($request);
	}

}