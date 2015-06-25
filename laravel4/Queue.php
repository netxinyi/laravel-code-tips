<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:24
 */

class Queue extends \Illuminate\Support\Facades\Queue{

	/**
	 * Register an event listener for the failed job event.
	 *
	 * @param mixed $callback
	 * @return void
	 * @static
	 */
	public static function failing($callback){
		\Illuminate\Queue\QueueManager::failing($callback);
	}

	/**
	 * Determine if the driver is connected.
	 *
	 * @param string $name
	 * @return bool
	 * @static
	 */
	public static function connected($name = null){
		return \Illuminate\Queue\QueueManager::connected($name);
	}

	/**
	 * Resolve a queue connection instance.
	 *
	 * @param string $name
	 * @return \Illuminate\Queue\RedisQueue
	 * @static
	 */
	public static function connection($name = null){
		return \Illuminate\Queue\QueueManager::connection($name);
	}

	/**
	 * Add a queue connection resolver.
	 *
	 * @param string $driver
	 * @param \Closure $resolver
	 * @return void
	 * @static
	 */
	public static function extend($driver, $resolver){
		\Illuminate\Queue\QueueManager::extend($driver, $resolver);
	}

	/**
	 * Add a queue connection resolver.
	 *
	 * @param string $driver
	 * @param \Closure $resolver
	 * @return void
	 * @static
	 */
	public static function addConnector($driver, $resolver){
		\Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
	}

	/**
	 * Get the name of the default queue connection.
	 *
	 * @return string
	 * @static
	 */
	public static function getDefaultDriver(){
		return \Illuminate\Queue\QueueManager::getDefaultDriver();
	}

	/**
	 * Set the name of the default queue connection.
	 *
	 * @param string $name
	 * @return void
	 * @static
	 */
	public static function setDefaultDriver($name){
		\Illuminate\Queue\QueueManager::setDefaultDriver($name);
	}

	/**
	 * Get the full name for the given connection.
	 *
	 * @param string $connection
	 * @return string
	 * @static
	 */
	public static function getName($connection = null){
		return \Illuminate\Queue\QueueManager::getName($connection);
	}

	/**
	 * Push a new job onto the queue.
	 *
	 * @param string $job
	 * @param mixed $data
	 * @param string $queue
	 * @return void
	 * @static
	 */
	public static function push($job, $data = '', $queue = null){
		\Illuminate\Queue\RedisQueue::push($job, $data, $queue);
	}

	/**
	 * Push a raw payload onto the queue.
	 *
	 * @param string $payload
	 * @param string $queue
	 * @param array $options
	 * @return mixed
	 * @static
	 */
	public static function pushRaw($payload, $queue = null, $options = array()){
		return \Illuminate\Queue\RedisQueue::pushRaw($payload, $queue, $options);
	}

	/**
	 * Push a new job onto the queue after a delay.
	 *
	 * @param \DateTime|int $delay
	 * @param string $job
	 * @param mixed $data
	 * @param string $queue
	 * @return void
	 * @static
	 */
	public static function later($delay, $job, $data = '', $queue = null){
		\Illuminate\Queue\RedisQueue::later($delay, $job, $data, $queue);
	}

	/**
	 * Release a reserved job back onto the queue.
	 *
	 * @param string $queue
	 * @param string $payload
	 * @param int $delay
	 * @param int $attempts
	 * @return void
	 * @static
	 */
	public static function release($queue, $payload, $delay, $attempts){
		\Illuminate\Queue\RedisQueue::release($queue, $payload, $delay, $attempts);
	}

	/**
	 * Pop the next job off of the queue.
	 *
	 * @param string $queue
	 * @return \Illuminate\Queue\Jobs\Job|null
	 * @static
	 */
	public static function pop($queue = null){
		return \Illuminate\Queue\RedisQueue::pop($queue);
	}

	/**
	 * Delete a reserved job from the queue.
	 *
	 * @param string $queue
	 * @param string $job
	 * @return void
	 * @static
	 */
	public static function deleteReserved($queue, $job){
		\Illuminate\Queue\RedisQueue::deleteReserved($queue, $job);
	}

	/**
	 * Migrate the delayed jobs that are ready to the regular queue.
	 *
	 * @param string $from
	 * @param string $to
	 * @return void
	 * @static
	 */
	public static function migrateExpiredJobs($from, $to){
		\Illuminate\Queue\RedisQueue::migrateExpiredJobs($from, $to);
	}

	/**
	 * Get the underlying Redis instance.
	 *
	 * @return \Illuminate\Redis\Database
	 * @static
	 */
	public static function getRedis(){
		return \Illuminate\Queue\RedisQueue::getRedis();
	}

	/**
	 * Marshal a push queue request and fire the job.
	 *
	 * @throws \RuntimeException
	 * @static
	 */
	public static function marshal(){
		//Method inherited from \Illuminate\Queue\Queue
		return \Illuminate\Queue\RedisQueue::marshal();
	}

	/**
	 * Push a new an array of jobs onto the queue.
	 *
	 * @param array $jobs
	 * @param mixed $data
	 * @param string $queue
	 * @return mixed
	 * @static
	 */
	public static function bulk($jobs, $data = '', $queue = null){
		//Method inherited from \Illuminate\Queue\Queue
		return \Illuminate\Queue\RedisQueue::bulk($jobs, $data, $queue);
	}

	/**
	 * Get the current UNIX timestamp.
	 *
	 * @return int
	 * @static
	 */
	public static function getTime(){
		//Method inherited from \Illuminate\Queue\Queue
		return \Illuminate\Queue\RedisQueue::getTime();
	}

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container\Container $container
	 * @return void
	 * @static
	 */
	public static function setContainer($container){
		//Method inherited from \Illuminate\Queue\Queue
		\Illuminate\Queue\RedisQueue::setContainer($container);
	}

}