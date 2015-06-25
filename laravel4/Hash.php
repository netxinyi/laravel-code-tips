<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:01
 */

class Hash extends \Illuminate\Support\Facades\Hash{

	/**
	 * Hash the given value.
	 *
	 * @param string $value
	 * @param array $options
	 * @return string
	 * @throws \RuntimeException
	 * @static
	 */
	public static function make($value, $options = array()){
		return \Illuminate\Hashing\BcryptHasher::make($value, $options);
	}

	/**
	 * Check the given plain value against a hash.
	 *
	 * @param string $value
	 * @param string $hashedValue
	 * @param array $options
	 * @return bool
	 * @static
	 */
	public static function check($value, $hashedValue, $options = array()){
		return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
	}

	/**
	 * Check if the given hash has been hashed using the given options.
	 *
	 * @param string $hashedValue
	 * @param array $options
	 * @return bool
	 * @static
	 */
	public static function needsRehash($hashedValue, $options = array()){
		return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
	}

}