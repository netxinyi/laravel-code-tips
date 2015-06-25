<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 18:43
 */
namespace {
	exit( "该文件不能被引入,仅用于代码提示" );


	class Auth extends \Illuminate\Support\Facades\Auth{

		/**
		 * Create an instance of the database driver.
		 *
		 * @return \Illuminate\Auth\Guard
		 * @static
		 */
		public static function createDatabaseDriver(){
			return \Illuminate\Auth\AuthManager::createDatabaseDriver();
		}

		/**
		 * Create an instance of the Eloquent driver.
		 *
		 * @return \Illuminate\Auth\Guard
		 * @static
		 */
		public static function createEloquentDriver(){
			return \Illuminate\Auth\AuthManager::createEloquentDriver();
		}

		/**
		 * Get the default authentication driver name.
		 *
		 * @return string
		 * @static
		 */
		public static function getDefaultDriver(){
			return \Illuminate\Auth\AuthManager::getDefaultDriver();
		}

		/**
		 * Set the default authentication driver name.
		 *
		 * @param string $name
		 * @return void
		 * @static
		 */
		public static function setDefaultDriver($name){
			\Illuminate\Auth\AuthManager::setDefaultDriver($name);
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
			return \Illuminate\Auth\AuthManager::driver($driver);
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
			return \Illuminate\Auth\AuthManager::extend($driver, $callback);
		}

		/**
		 * Get all of the created "drivers".
		 *
		 * @return array
		 * @static
		 */
		public static function getDrivers(){
			//Method inherited from \Illuminate\Support\Manager
			return \Illuminate\Auth\AuthManager::getDrivers();
		}

		/**
		 * Determine if the current user is authenticated.
		 *
		 * @return bool
		 * @static
		 */
		public static function check(){
			return \Illuminate\Auth\Guard::check();
		}

		/**
		 * Determine if the current user is a guest.
		 *
		 * @return bool
		 * @static
		 */
		public static function guest(){
			return \Illuminate\Auth\Guard::guest();
		}

		/**
		 * Get the currently authenticated user.
		 *
		 * @return \User|null
		 * @static
		 */
		public static function user(){
			return \Illuminate\Auth\Guard::user();
		}

		/**
		 * Get the ID for the currently authenticated user.
		 *
		 * @return int|null
		 * @static
		 */
		public static function id(){
			return \Illuminate\Auth\Guard::id();
		}

		/**
		 * Log a user into the application without sessions or cookies.
		 *
		 * @param array $credentials
		 * @return bool
		 * @static
		 */
		public static function once($credentials = array()){
			return \Illuminate\Auth\Guard::once($credentials);
		}

		/**
		 * Validate a user's credentials.
		 *
		 * @param array $credentials
		 * @return bool
		 * @static
		 */
		public static function validate($credentials = array()){
			return \Illuminate\Auth\Guard::validate($credentials);
		}

		/**
		 * Attempt to authenticate using HTTP Basic Auth.
		 *
		 * @param string $field
		 * @param \Symfony\Component\HttpFoundation\Request $request
		 * @return \Symfony\Component\HttpFoundation\Response|null
		 * @static
		 */
		public static function basic($field = 'email', $request = null){
			return \Illuminate\Auth\Guard::basic($field, $request);
		}

		/**
		 * Perform a stateless HTTP Basic login attempt.
		 *
		 * @param string $field
		 * @param \Symfony\Component\HttpFoundation\Request $request
		 * @return \Symfony\Component\HttpFoundation\Response|null
		 * @static
		 */
		public static function onceBasic($field = 'email', $request = null){
			return \Illuminate\Auth\Guard::onceBasic($field, $request);
		}

		/**
		 * Attempt to authenticate a user using the given credentials.
		 *
		 * @param array $credentials
		 * @param bool $remember
		 * @param bool $login
		 * @return bool
		 * @static
		 */
		public static function attempt($credentials = array(), $remember = false, $login = true){
			return \Illuminate\Auth\Guard::attempt($credentials, $remember, $login);
		}

		/**
		 * Register an authentication attempt event listener.
		 *
		 * @param mixed $callback
		 * @return void
		 * @static
		 */
		public static function attempting($callback){
			\Illuminate\Auth\Guard::attempting($callback);
		}

		/**
		 * Log a user into the application.
		 *
		 * @param \Illuminate\Auth\UserInterface $user
		 * @param bool $remember
		 * @return void
		 * @static
		 */
		public static function login($user, $remember = false){
			\Illuminate\Auth\Guard::login($user, $remember);
		}

		/**
		 * Log the given user ID into the application.
		 *
		 * @param mixed $id
		 * @param bool $remember
		 * @return \User
		 * @static
		 */
		public static function loginUsingId($id, $remember = false){
			return \Illuminate\Auth\Guard::loginUsingId($id, $remember);
		}

		/**
		 * Log the given user ID into the application without sessions or cookies.
		 *
		 * @param mixed $id
		 * @return bool
		 * @static
		 */
		public static function onceUsingId($id){
			return \Illuminate\Auth\Guard::onceUsingId($id);
		}

		/**
		 * Log the user out of the application.
		 *
		 * @return void
		 * @static
		 */
		public static function logout(){
			\Illuminate\Auth\Guard::logout();
		}

		/**
		 * Get the cookie creator instance used by the guard.
		 *
		 * @return \Illuminate\Cookie\CookieJar
		 * @throws \RuntimeException
		 * @static
		 */
		public static function getCookieJar(){
			return \Illuminate\Auth\Guard::getCookieJar();
		}

		/**
		 * Set the cookie creator instance used by the guard.
		 *
		 * @param \Illuminate\Cookie\CookieJar $cookie
		 * @return void
		 * @static
		 */
		public static function setCookieJar($cookie){
			\Illuminate\Auth\Guard::setCookieJar($cookie);
		}

		/**
		 * Get the event dispatcher instance.
		 *
		 * @return \Illuminate\Events\Dispatcher
		 * @static
		 */
		public static function getDispatcher(){
			return \Illuminate\Auth\Guard::getDispatcher();
		}

		/**
		 * Set the event dispatcher instance.
		 *
		 * @param \Illuminate\Events\Dispatcher
		 * @static
		 */
		public static function setDispatcher($events){
			return \Illuminate\Auth\Guard::setDispatcher($events);
		}

		/**
		 * Get the session store used by the guard.
		 *
		 * @return \Illuminate\Session\Store
		 * @static
		 */
		public static function getSession(){
			return \Illuminate\Auth\Guard::getSession();
		}

		/**
		 * Get the user provider used by the guard.
		 *
		 * @return \Illuminate\Auth\Guard
		 * @static
		 */
		public static function getProvider(){
			return \Illuminate\Auth\Guard::getProvider();
		}

		/**
		 * Set the user provider used by the guard.
		 *
		 * @param \Illuminate\Auth\UserProviderInterface $provider
		 * @return void
		 * @static
		 */
		public static function setProvider($provider){
			\Illuminate\Auth\Guard::setProvider($provider);
		}

		/**
		 * Return the currently cached user of the application.
		 *
		 * @return \User|null
		 * @static
		 */
		public static function getUser(){
			return \Illuminate\Auth\Guard::getUser();
		}

		/**
		 * Set the current user of the application.
		 *
		 * @param \Illuminate\Auth\UserInterface $user
		 * @return void
		 * @static
		 */
		public static function setUser($user){
			\Illuminate\Auth\Guard::setUser($user);
		}

		/**
		 * Get the current request instance.
		 *
		 * @return \Symfony\Component\HttpFoundation\Request
		 * @static
		 */
		public static function getRequest(){
			return \Illuminate\Auth\Guard::getRequest();
		}

		/**
		 * Set the current request instance.
		 *
		 * @param \Symfony\Component\HttpFoundation\Request
		 * @return \Illuminate\Auth\Guard
		 * @static
		 */
		public static function setRequest($request){
			return \Illuminate\Auth\Guard::setRequest($request);
		}

		/**
		 * Get the last user we attempted to authenticate.
		 *
		 * @return \User
		 * @static
		 */
		public static function getLastAttempted(){
			return \Illuminate\Auth\Guard::getLastAttempted();
		}

		/**
		 * Get a unique identifier for the auth session value.
		 *
		 * @return string
		 * @static
		 */
		public static function getName(){
			return \Illuminate\Auth\Guard::getName();
		}

		/**
		 * Get the name of the cookie used to store the "recaller".
		 *
		 * @return string
		 * @static
		 */
		public static function getRecallerName(){
			return \Illuminate\Auth\Guard::getRecallerName();
		}

		/**
		 * Determine if the user was authenticated via "remember me" cookie.
		 *
		 * @return bool
		 * @static
		 */
		public static function viaRemember(){
			return \Illuminate\Auth\Guard::viaRemember();
		}

	}

}