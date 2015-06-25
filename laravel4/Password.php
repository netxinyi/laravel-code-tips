<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:24
 */

class Password extends \Illuminate\Support\Facades\Password{

	/**
	 * Send a password reminder to a user.
	 *
	 * @param array $credentials
	 * @param \Closure $callback
	 * @return string
	 * @static
	 */
	public static function remind($credentials, $callback = null){
		return \Illuminate\Auth\Reminders\PasswordBroker::remind($credentials, $callback);
	}

	/**
	 * Send the password reminder e-mail.
	 *
	 * @param \Illuminate\Auth\Reminders\RemindableInterface $user
	 * @param string $token
	 * @param \Closure $callback
	 * @return int
	 * @static
	 */
	public static function sendReminder($user, $token, $callback = null){
		return \Illuminate\Auth\Reminders\PasswordBroker::sendReminder($user, $token, $callback);
	}

	/**
	 * Reset the password for the given token.
	 *
	 * @param array $credentials
	 * @param \Closure $callback
	 * @return mixed
	 * @static
	 */
	public static function reset($credentials, $callback){
		return \Illuminate\Auth\Reminders\PasswordBroker::reset($credentials, $callback);
	}

	/**
	 * Set a custom password validator.
	 *
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function validator($callback){
		\Illuminate\Auth\Reminders\PasswordBroker::validator($callback);
	}

	/**
	 * Get the user for the given credentials.
	 *
	 * @param array $credentials
	 * @return \Illuminate\Auth\Reminders\RemindableInterface
	 * @throws \UnexpectedValueException
	 * @static
	 */
	public static function getUser($credentials){
		return \Illuminate\Auth\Reminders\PasswordBroker::getUser($credentials);
	}

}