<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 18:47
 */

namespace {
	exit( "该文件不能被引入,仅用于代码提示" );



	class Cache extends \Illuminate\Support\Facades\Cache{

		/**
		 * Get the cache "prefix" value.
		 *
		 * @return string
		 * @static
		 */
		public static function getPrefix(){
			return \Illuminate\Cache\CacheManager::getPrefix();
		}

		/**
		 * Set the cache "prefix" value.
		 *
		 * @param string $name
		 * @return void
		 * @static
		 */
		public static function setPrefix($name){
			\Illuminate\Cache\CacheManager::setPrefix($name);
		}

		/**
		 * Get the default cache driver name.
		 *
		 * @return string
		 * @static
		 */
		public static function getDefaultDriver(){
			return \Illuminate\Cache\CacheManager::getDefaultDriver();
		}

		/**
		 * Set the default cache driver name.
		 *
		 * @param string $name
		 * @return void
		 * @static
		 */
		public static function setDefaultDriver($name){
			\Illuminate\Cache\CacheManager::setDefaultDriver($name);
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
			return \Illuminate\Cache\CacheManager::driver($driver);
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
			return \Illuminate\Cache\CacheManager::extend($driver, $callback);
		}

		/**
		 * Get all of the created "drivers".
		 *
		 * @return array
		 * @static
		 */
		public static function getDrivers(){
			//Method inherited from \Illuminate\Support\Manager
			return \Illuminate\Cache\CacheManager::getDrivers();
		}

		/**
		 * Determine if an item exists in the cache.
		 *
		 * @param string $key
		 * @return bool
		 * @static
		 */
		public static function has($key){
			return \Illuminate\Cache\Repository::has($key);
		}

		/**
		 * Retrieve an item from the cache by key.
		 *
		 * @param string $key
		 * @param mixed $default
		 * @return mixed
		 * @static
		 */
		public static function get($key, $default = null){
			return \Illuminate\Cache\Repository::get($key, $default);
		}

		/**
		 * Store an item in the cache.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @param \DateTime|int $minutes
		 * @return void
		 * @static
		 */
		public static function put($key, $value, $minutes){
			\Illuminate\Cache\Repository::put($key, $value, $minutes);
		}

		/**
		 * Store an item in the cache if the key does not exist.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @param \DateTime|int $minutes
		 * @return bool
		 * @static
		 */
		public static function add($key, $value, $minutes){
			return \Illuminate\Cache\Repository::add($key, $value, $minutes);
		}

		/**
		 * Get an item from the cache, or store the default value.
		 *
		 * @param string $key
		 * @param \DateTime|int $minutes
		 * @param \Closure $callback
		 * @return mixed
		 * @static
		 */
		public static function remember($key, $minutes, $callback){
			return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
		}

		/**
		 * Get an item from the cache, or store the default value forever.
		 *
		 * @param string $key
		 * @param \Closure $callback
		 * @return mixed
		 * @static
		 */
		public static function sear($key, $callback){
			return \Illuminate\Cache\Repository::sear($key, $callback);
		}

		/**
		 * Get an item from the cache, or store the default value forever.
		 *
		 * @param string $key
		 * @param \Closure $callback
		 * @return mixed
		 * @static
		 */
		public static function rememberForever($key, $callback){
			return \Illuminate\Cache\Repository::rememberForever($key, $callback);
		}

		/**
		 * Get the default cache time.
		 *
		 * @return int
		 * @static
		 */
		public static function getDefaultCacheTime(){
			return \Illuminate\Cache\Repository::getDefaultCacheTime();
		}

		/**
		 * Set the default cache time in minutes.
		 *
		 * @param int $minutes
		 * @return void
		 * @static
		 */
		public static function setDefaultCacheTime($minutes){
			\Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
		}

		/**
		 * Get the cache store implementation.
		 *
		 * @return \Illuminate\Cache\RedisStore
		 * @static
		 */
		public static function getStore(){
			return \Illuminate\Cache\Repository::getStore();
		}

		/**
		 * Determine if a cached value exists.
		 *
		 * @param string $key
		 * @return bool
		 * @static
		 */
		public static function offsetExists($key){
			return \Illuminate\Cache\Repository::offsetExists($key);
		}

		/**
		 * Retrieve an item from the cache by key.
		 *
		 * @param string $key
		 * @return mixed
		 * @static
		 */
		public static function offsetGet($key){
			return \Illuminate\Cache\Repository::offsetGet($key);
		}

		/**
		 * Store an item in the cache for the default time.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @return void
		 * @static
		 */
		public static function offsetSet($key, $value){
			\Illuminate\Cache\Repository::offsetSet($key, $value);
		}

		/**
		 * Remove an item from the cache.
		 *
		 * @param string $key
		 * @return void
		 * @static
		 */
		public static function offsetUnset($key){
			\Illuminate\Cache\Repository::offsetUnset($key);
		}

		/**
		 * Register a macro with the Cache class.
		 *
		 * @param string $name
		 * @param callable $callback
		 * @return void
		 * @static
		 */
		public static function macro($name, $callback){
			\Illuminate\Cache\Repository::macro($name, $callback);
		}

		/**
		 * Increment the value of an item in the cache.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @return void
		 * @static
		 */
		public static function increment($key, $value = 1){
			\Illuminate\Cache\RedisStore::increment($key, $value);
		}

		/**
		 * Increment the value of an item in the cache.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @return void
		 * @static
		 */
		public static function decrement($key, $value = 1){
			\Illuminate\Cache\RedisStore::decrement($key, $value);
		}

		/**
		 * Store an item in the cache indefinitely.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @return void
		 * @static
		 */
		public static function forever($key, $value){
			\Illuminate\Cache\RedisStore::forever($key, $value);
		}

		/**
		 * Remove an item from the cache.
		 *
		 * @param string $key
		 * @return void
		 * @static
		 */
		public static function forget($key){
			\Illuminate\Cache\RedisStore::forget($key);
		}

		/**
		 * Remove all items from the cache.
		 *
		 * @return void
		 * @static
		 */
		public static function flush(){
			\Illuminate\Cache\RedisStore::flush();
		}

		/**
		 * Begin executing a new tags operation.
		 *
		 * @param array|mixed $names
		 * @return \Illuminate\Cache\RedisTaggedCache
		 * @static
		 */
		public static function tags($names){
			return \Illuminate\Cache\RedisStore::tags($names);
		}

		/**
		 * Get the Redis connection instance.
		 *
		 * @return \Predis\Connection\SingleConnectionInterface
		 * @static
		 */
		public static function connection(){
			return \Illuminate\Cache\RedisStore::connection();
		}

		/**
		 * Set the connection name to be used.
		 *
		 * @param string $connection
		 * @return void
		 * @static
		 */
		public static function setConnection($connection){
			\Illuminate\Cache\RedisStore::setConnection($connection);
		}

		/**
		 * Get the Redis database instance.
		 *
		 * @return \Illuminate\Redis\Database
		 * @static
		 */
		public static function getRedis(){
			return \Illuminate\Cache\RedisStore::getRedis();
		}

		/**
		 * Begin executing a new tags operation.
		 *
		 * @param string $name
		 * @return \Illuminate\Cache\TaggedCache
		 * @static
		 */
		public static function section($name){
			//Method inherited from \Illuminate\Cache\TaggableStore
			return \Illuminate\Cache\RedisStore::section($name);
		}

	}
}