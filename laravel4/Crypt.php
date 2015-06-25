<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 18:59
 */

class Crypt extends \Illuminate\Support\Facades\Crypt{

	/**
	 * Encrypt the given value.
	 *
	 * @param string $value
	 * @return string
	 * @static
	 */
	public static function encrypt($value){
		return \Illuminate\Encryption\Encrypter::encrypt($value);
	}

	/**
	 * Decrypt the given value.
	 *
	 * @param string $payload
	 * @return string
	 * @static
	 */
	public static function decrypt($payload){
		return \Illuminate\Encryption\Encrypter::decrypt($payload);
	}

	/**
	 * Set the encryption key.
	 *
	 * @param string $key
	 * @return void
	 * @static
	 */
	public static function setKey($key){
		\Illuminate\Encryption\Encrypter::setKey($key);
	}

	/**
	 * Set the encryption cipher.
	 *
	 * @param string $cipher
	 * @return void
	 * @static
	 */
	public static function setCipher($cipher){
		\Illuminate\Encryption\Encrypter::setCipher($cipher);
	}

	/**
	 * Set the encryption mode.
	 *
	 * @param string $mode
	 * @return void
	 * @static
	 */
	public static function setMode($mode){
		\Illuminate\Encryption\Encrypter::setMode($mode);
	}

}