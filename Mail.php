<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:21
 */

class Mail extends \Illuminate\Support\Facades\Mail{

	/**
	 * Set the global from address and name.
	 *
	 * @param string $address
	 * @param string $name
	 * @return void
	 * @static
	 */
	public static function alwaysFrom($address, $name = null){
		\Illuminate\Mail\Mailer::alwaysFrom($address, $name);
	}

	/**
	 * Send a new message when only a plain part.
	 *
	 * @param string $view
	 * @param array $data
	 * @param mixed $callback
	 * @return int
	 * @static
	 */
	public static function plain($view, $data, $callback){
		return \Illuminate\Mail\Mailer::plain($view, $data, $callback);
	}

	/**
	 * Send a new message using a view.
	 *
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @return int
	 * @static
	 */
	public static function send($view, $data, $callback){
		return \Illuminate\Mail\Mailer::send($view, $data, $callback);
	}

	/**
	 * Queue a new e-mail message for sending.
	 *
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @param string $queue
	 * @return void
	 * @static
	 */
	public static function queue($view, $data, $callback, $queue = null){
		\Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
	}

	/**
	 * Queue a new e-mail message for sending on the given queue.
	 *
	 * @param string $queue
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @return void
	 * @static
	 */
	public static function queueOn($queue, $view, $data, $callback){
		\Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
	}

	/**
	 * Queue a new e-mail message for sending after (n) seconds.
	 *
	 * @param int $delay
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @param string $queue
	 * @return void
	 * @static
	 */
	public static function later($delay, $view, $data, $callback, $queue = null){
		\Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
	}

	/**
	 * Queue a new e-mail message for sending after (n) seconds on the given queue.
	 *
	 * @param string $queue
	 * @param int $delay
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @return void
	 * @static
	 */
	public static function laterOn($queue, $delay, $view, $data, $callback){
		\Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
	}

	/**
	 * Handle a queued e-mail message job.
	 *
	 * @param \Illuminate\Queue\Jobs\Job $job
	 * @param array $data
	 * @return void
	 * @static
	 */
	public static function handleQueuedMessage($job, $data){
		\Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
	}

	/**
	 * Tell the mailer to not really send messages.
	 *
	 * @param bool $value
	 * @return void
	 * @static
	 */
	public static function pretend($value = true){
		\Illuminate\Mail\Mailer::pretend($value);
	}

	/**
	 * Get the view environment instance.
	 *
	 * @return \Illuminate\View\Environment
	 * @static
	 */
	public static function getViewEnvironment(){
		return \Illuminate\Mail\Mailer::getViewEnvironment();
	}

	/**
	 * Get the Swift Mailer instance.
	 *
	 * @return \Swift_Mailer
	 * @static
	 */
	public static function getSwiftMailer(){
		return \Illuminate\Mail\Mailer::getSwiftMailer();
	}

	/**
	 * Get the array of failed recipients.
	 *
	 * @return array
	 * @static
	 */
	public static function failures(){
		return \Illuminate\Mail\Mailer::failures();
	}

	/**
	 * Set the Swift Mailer instance.
	 *
	 * @param \Swift_Mailer $swift
	 * @return void
	 * @static
	 */
	public static function setSwiftMailer($swift){
		\Illuminate\Mail\Mailer::setSwiftMailer($swift);
	}

	/**
	 * Set the log writer instance.
	 *
	 * @param \Illuminate\Log\Writer $logger
	 * @return \Illuminate\Mail\Mailer
	 * @static
	 */
	public static function setLogger($logger){
		return \Illuminate\Mail\Mailer::setLogger($logger);
	}

	/**
	 * Set the queue manager instance.
	 *
	 * @param \Illuminate\Queue\QueueManager $queue
	 * @return \Illuminate\Mail\Mailer
	 * @static
	 */
	public static function setQueue($queue){
		return \Illuminate\Mail\Mailer::setQueue($queue);
	}

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container\Container $container
	 * @return void
	 * @static
	 */
	public static function setContainer($container){
		\Illuminate\Mail\Mailer::setContainer($container);
	}

}