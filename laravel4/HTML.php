<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:01
 */

class HTML extends \Illuminate\Support\Facades\HTML{

	/**
	 * Register a custom HTML macro.
	 *
	 * @param string $name
	 * @param callable $macro
	 * @return void
	 * @static
	 */
	public static function macro($name, $macro){
		\Illuminate\Html\HtmlBuilder::macro($name, $macro);
	}

	/**
	 * Convert an HTML string to entities.
	 *
	 * @param string $value
	 * @return string
	 * @static
	 */
	public static function entities($value){
		return \Illuminate\Html\HtmlBuilder::entities($value);
	}

	/**
	 * Convert entities to HTML characters.
	 *
	 * @param string $value
	 * @return string
	 * @static
	 */
	public static function decode($value){
		return \Illuminate\Html\HtmlBuilder::decode($value);
	}

	/**
	 * Generate a link to a JavaScript file.
	 *
	 * @param string $url
	 * @param array $attributes
	 * @param bool $secure
	 * @return string
	 * @static
	 */
	public static function script($url, $attributes = array(), $secure = null){
		return \Illuminate\Html\HtmlBuilder::script($url, $attributes, $secure);
	}

	/**
	 * Generate a link to a CSS file.
	 *
	 * @param string $url
	 * @param array $attributes
	 * @param bool $secure
	 * @return string
	 * @static
	 */
	public static function style($url, $attributes = array(), $secure = null){
		return \Illuminate\Html\HtmlBuilder::style($url, $attributes, $secure);
	}

	/**
	 * Generate an HTML image element.
	 *
	 * @param string $url
	 * @param string $alt
	 * @param array $attributes
	 * @param bool $secure
	 * @return string
	 * @static
	 */
	public static function image($url, $alt = null, $attributes = array(), $secure = null){
		return \Illuminate\Html\HtmlBuilder::image($url, $alt, $attributes, $secure);
	}

	/**
	 * Generate a HTML link.
	 *
	 * @param string $url
	 * @param string $title
	 * @param array $attributes
	 * @param bool $secure
	 * @return string
	 * @static
	 */
	public static function link($url, $title = null, $attributes = array(), $secure = null){
		return \Illuminate\Html\HtmlBuilder::link($url, $title, $attributes, $secure);
	}

	/**
	 * Generate a HTTPS HTML link.
	 *
	 * @param string $url
	 * @param string $title
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function secureLink($url, $title = null, $attributes = array()){
		return \Illuminate\Html\HtmlBuilder::secureLink($url, $title, $attributes);
	}

	/**
	 * Generate a HTML link to an asset.
	 *
	 * @param string $url
	 * @param string $title
	 * @param array $attributes
	 * @param bool $secure
	 * @return string
	 * @static
	 */
	public static function linkAsset($url, $title = null, $attributes = array(), $secure = null){
		return \Illuminate\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure);
	}

	/**
	 * Generate a HTTPS HTML link to an asset.
	 *
	 * @param string $url
	 * @param string $title
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function linkSecureAsset($url, $title = null, $attributes = array()){
		return \Illuminate\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes);
	}

	/**
	 * Generate a HTML link to a named route.
	 *
	 * @param string $name
	 * @param string $title
	 * @param array $parameters
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function linkRoute($name, $title = null, $parameters = array(), $attributes = array()){
		return \Illuminate\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes);
	}

	/**
	 * Generate a HTML link to a controller action.
	 *
	 * @param string $action
	 * @param string $title
	 * @param array $parameters
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function linkAction($action, $title = null, $parameters = array(), $attributes = array()){
		return \Illuminate\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes);
	}

	/**
	 * Generate a HTML link to an email address.
	 *
	 * @param string $email
	 * @param string $title
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function mailto($email, $title = null, $attributes = array()){
		return \Illuminate\Html\HtmlBuilder::mailto($email, $title, $attributes);
	}

	/**
	 * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
	 *
	 * @param string $email
	 * @return string
	 * @static
	 */
	public static function email($email){
		return \Illuminate\Html\HtmlBuilder::email($email);
	}

	/**
	 * Generate an ordered list of items.
	 *
	 * @param array $list
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function ol($list, $attributes = array()){
		return \Illuminate\Html\HtmlBuilder::ol($list, $attributes);
	}

	/**
	 * Generate an un-ordered list of items.
	 *
	 * @param array $list
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function ul($list, $attributes = array()){
		return \Illuminate\Html\HtmlBuilder::ul($list, $attributes);
	}

	/**
	 * Build an HTML attribute string from an array.
	 *
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function attributes($attributes){
		return \Illuminate\Html\HtmlBuilder::attributes($attributes);
	}

	/**
	 * Obfuscate a string to prevent spam-bots from sniffing it.
	 *
	 * @param string $value
	 * @return string
	 * @static
	 */
	public static function obfuscate($value){
		return \Illuminate\Html\HtmlBuilder::obfuscate($value);
	}

}