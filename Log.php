<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:02
 */

class Log extends \Illuminate\Support\Facades\Log{

	/**
	 * Adds a log record at the DEBUG level.
	 *
	 * @param string $message The log message
	 * @param array $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static
	 */
	public static function debug($message, $context = array()){
		return \Monolog\Logger::debug($message, $context);
	}

	/**
	 * Adds a log record at the INFO level.
	 *
	 * @param string $message The log message
	 * @param array $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static
	 */
	public static function info($message, $context = array()){
		return \Monolog\Logger::info($message, $context);
	}

	/**
	 * Adds a log record at the NOTICE level.
	 *
	 * @param string $message The log message
	 * @param array $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static
	 */
	public static function notice($message, $context = array()){
		return \Monolog\Logger::notice($message, $context);
	}

	/**
	 * Adds a log record at the WARNING level.
	 *
	 * @param string $message The log message
	 * @param array $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static
	 */
	public static function warning($message, $context = array()){
		return \Monolog\Logger::warning($message, $context);
	}

	/**
	 * Adds a log record at the ERROR level.
	 *
	 * @param string $message The log message
	 * @param array $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static
	 */
	public static function error($message, $context = array()){
		return \Monolog\Logger::error($message, $context);
	}

	/**
	 * Adds a log record at the CRITICAL level.
	 *
	 * @param string $message The log message
	 * @param array $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static
	 */
	public static function critical($message, $context = array()){
		return \Monolog\Logger::critical($message, $context);
	}

	/**
	 * Adds a log record at the ALERT level.
	 *
	 * @param string $message The log message
	 * @param array $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static
	 */
	public static function alert($message, $context = array()){
		return \Monolog\Logger::alert($message, $context);
	}

	/**
	 * Adds a log record at the EMERGENCY level.
	 *
	 * @param string $message The log message
	 * @param array $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static
	 */
	public static function emergency($message, $context = array()){
		return \Monolog\Logger::emergency($message, $context);
	}

	/**
	 * Register a file log handler.
	 *
	 * @param string $path
	 * @param string $level
	 * @return void
	 * @static
	 */
	public static function useFiles($path, $level = 'debug'){
		\Illuminate\Log\Writer::useFiles($path, $level);
	}

	/**
	 * Register a daily file log handler.
	 *
	 * @param string $path
	 * @param int $days
	 * @param string $level
	 * @return void
	 * @static
	 */
	public static function useDailyFiles($path, $days = 0, $level = 'debug'){
		\Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
	}

	/**
	 * Register a new callback handler for when
	 * a log event is triggered.
	 *
	 * @param \Closure $callback
	 * @return void
	 * @throws \RuntimeException
	 * @static
	 */
	public static function listen($callback){
		\Illuminate\Log\Writer::listen($callback);
	}

	/**
	 * Get the underlying Monolog instance.
	 *
	 * @return \Monolog\Logger
	 * @static
	 */
	public static function getMonolog(){
		return \Illuminate\Log\Writer::getMonolog();
	}

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static
	 */
	public static function getEventDispatcher(){
		return \Illuminate\Log\Writer::getEventDispatcher();
	}

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @return void
	 * @static
	 */
	public static function setEventDispatcher($dispatcher){
		\Illuminate\Log\Writer::setEventDispatcher($dispatcher);
	}

	/**
	 * Dynamically pass log calls into the writer.
	 *
	 * @param mixed  (level, param, param)
	 * @return mixed
	 * @static
	 */
	public static function write(){
		return \Illuminate\Log\Writer::write();
	}

}