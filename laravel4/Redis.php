<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:25
 */

class Redis extends \Illuminate\Support\Facades\Redis{

	/**
	 * Get a specific Redis connection instance.
	 *
	 * @param string $name
	 * @return \Predis\Connection\SingleConnectionInterface
	 * @static
	 */
	public static function connection($name = 'default'){
		return \Illuminate\Redis\Database::connection($name);
	}

	/**
	 * Run a command against the Redis database.
	 *
	 * @param string $method
	 * @param array $parameters
	 * @return mixed
	 * @static
	 */
	public static function command($method, $parameters = array()){
		return \Illuminate\Redis\Database::command($method, $parameters);
	}

}