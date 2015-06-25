<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:26
 */

class SSH extends \Illuminate\Support\Facades\SSH{

	/**
	 * Get a remote connection instance.
	 *
	 * @param string|array|mixed $name
	 * @return \Illuminate\Remote\Connection
	 * @static
	 */
	public static function into($name){
		return \Illuminate\Remote\RemoteManager::into($name);
	}

	/**
	 * Get a remote connection instance.
	 *
	 * @param string|array $name
	 * @return \Illuminate\Remote\Connection
	 * @static
	 */
	public static function connection($name = null){
		return \Illuminate\Remote\RemoteManager::connection($name);
	}

	/**
	 * Get a connection group instance by name.
	 *
	 * @param string $name
	 * @return \Illuminate\Remote\Connection
	 * @static
	 */
	public static function group($name){
		return \Illuminate\Remote\RemoteManager::group($name);
	}

	/**
	 * Resolve a multiple connection instance.
	 *
	 * @param array $names
	 * @return \Illuminate\Remote\MultiConnection
	 * @static
	 */
	public static function multiple($names){
		return \Illuminate\Remote\RemoteManager::multiple($names);
	}

	/**
	 * Resolve a remote connection instance.
	 *
	 * @param string $name
	 * @return \Illuminate\Remote\Connection
	 * @static
	 */
	public static function resolve($name){
		return \Illuminate\Remote\RemoteManager::resolve($name);
	}

	/**
	 * Get the default connection name.
	 *
	 * @return string
	 * @static
	 */
	public static function getDefaultConnection(){
		return \Illuminate\Remote\RemoteManager::getDefaultConnection();
	}

	/**
	 * Set the default connection name.
	 *
	 * @param string $name
	 * @return void
	 * @static
	 */
	public static function setDefaultConnection($name){
		\Illuminate\Remote\RemoteManager::setDefaultConnection($name);
	}

	/**
	 * Define a set of commands as a task.
	 *
	 * @param string $task
	 * @param string|array $commands
	 * @return void
	 * @static
	 */
	public static function define($task, $commands){
		\Illuminate\Remote\Connection::define($task, $commands);
	}

	/**
	 * Run a task against the connection.
	 *
	 * @param string $task
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function task($task, $callback = null){
		\Illuminate\Remote\Connection::task($task, $callback);
	}

	/**
	 * Run a set of commands against the connection.
	 *
	 * @param string|array $commands
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function run($commands, $callback = null){
		\Illuminate\Remote\Connection::run($commands, $callback);
	}

	/**
	 * Download the contents of a remote file.
	 *
	 * @param string $remote
	 * @param string $local
	 * @return void
	 * @static
	 */
	public static function get($remote, $local){
		\Illuminate\Remote\Connection::get($remote, $local);
	}

	/**
	 * Get the contents of a remote file.
	 *
	 * @param string $remote
	 * @return string
	 * @static
	 */
	public static function getString($remote){
		return \Illuminate\Remote\Connection::getString($remote);
	}

	/**
	 * Upload a local file to the server.
	 *
	 * @param string $local
	 * @param string $remote
	 * @return void
	 * @static
	 */
	public static function put($local, $remote){
		\Illuminate\Remote\Connection::put($local, $remote);
	}

	/**
	 * Upload a string to to the given file on the server.
	 *
	 * @param string $remote
	 * @param string $contents
	 * @return void
	 * @static
	 */
	public static function putString($remote, $contents){
		\Illuminate\Remote\Connection::putString($remote, $contents);
	}

	/**
	 * Display the given line using the default output.
	 *
	 * @param string $line
	 * @return void
	 * @static
	 */
	public static function display($line){
		\Illuminate\Remote\Connection::display($line);
	}

	/**
	 * Get the exit status of the last command.
	 *
	 * @return int|bool
	 * @static
	 */
	public static function status(){
		return \Illuminate\Remote\Connection::status();
	}

	/**
	 * Get the gateway implementation.
	 *
	 * @return \Illuminate\Remote\GatewayInterface
	 * @throws \RuntimeException
	 * @static
	 */
	public static function getGateway(){
		return \Illuminate\Remote\Connection::getGateway();
	}

	/**
	 * Get the output implementation for the connection.
	 *
	 * @return \Symfony\Component\Console\Output\OutputInterface
	 * @static
	 */
	public static function getOutput(){
		return \Illuminate\Remote\Connection::getOutput();
	}

	/**
	 * Set the output implementation.
	 *
	 * @param \Symfony\Component\Console\Output\OutputInterface $output
	 * @return void
	 * @static
	 */
	public static function setOutput($output){
		\Illuminate\Remote\Connection::setOutput($output);
	}

}