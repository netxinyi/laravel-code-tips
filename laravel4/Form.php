<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:01
 */

class Form extends \Illuminate\Support\Facades\Form{

	/**
	 * Open up a new HTML form.
	 *
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function open($options = array()){
		return \Illuminate\Html\FormBuilder::open($options);
	}

	/**
	 * Create a new model based form builder.
	 *
	 * @param mixed $model
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function model($model, $options = array()){
		return \Illuminate\Html\FormBuilder::model($model, $options);
	}

	/**
	 * Set the model instance on the form builder.
	 *
	 * @param mixed $model
	 * @return void
	 * @static
	 */
	public static function setModel($model){
		\Illuminate\Html\FormBuilder::setModel($model);
	}

	/**
	 * Close the current form.
	 *
	 * @return string
	 * @static
	 */
	public static function close(){
		return \Illuminate\Html\FormBuilder::close();
	}

	/**
	 * Generate a hidden field with the current CSRF token.
	 *
	 * @return string
	 * @static
	 */
	public static function token(){
		return \Illuminate\Html\FormBuilder::token();
	}

	/**
	 * Create a form label element.
	 *
	 * @param string $name
	 * @param string $value
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function label($name, $value = null, $options = array()){
		return \Illuminate\Html\FormBuilder::label($name, $value, $options);
	}

	/**
	 * Create a form input field.
	 *
	 * @param string $type
	 * @param string $name
	 * @param string $value
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function input($type, $name, $value = null, $options = array()){
		return \Illuminate\Html\FormBuilder::input($type, $name, $value, $options);
	}

	/**
	 * Create a text input field.
	 *
	 * @param string $name
	 * @param string $value
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function text($name, $value = null, $options = array()){
		return \Illuminate\Html\FormBuilder::text($name, $value, $options);
	}

	/**
	 * Create a password input field.
	 *
	 * @param string $name
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function password($name, $options = array()){
		return \Illuminate\Html\FormBuilder::password($name, $options);
	}

	/**
	 * Create a hidden input field.
	 *
	 * @param string $name
	 * @param string $value
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function hidden($name, $value = null, $options = array()){
		return \Illuminate\Html\FormBuilder::hidden($name, $value, $options);
	}

	/**
	 * Create an e-mail input field.
	 *
	 * @param string $name
	 * @param string $value
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function email($name, $value = null, $options = array()){
		return \Illuminate\Html\FormBuilder::email($name, $value, $options);
	}

	/**
	 * Create a url input field.
	 *
	 * @param string $name
	 * @param string $value
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function url($name, $value = null, $options = array()){
		return \Illuminate\Html\FormBuilder::url($name, $value, $options);
	}

	/**
	 * Create a file input field.
	 *
	 * @param string $name
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function file($name, $options = array()){
		return \Illuminate\Html\FormBuilder::file($name, $options);
	}

	/**
	 * Create a textarea input field.
	 *
	 * @param string $name
	 * @param string $value
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function textarea($name, $value = null, $options = array()){
		return \Illuminate\Html\FormBuilder::textarea($name, $value, $options);
	}

	/**
	 * Create a select box field.
	 *
	 * @param string $name
	 * @param array $list
	 * @param string $selected
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function select($name, $list = array(), $selected = null, $options = array()){
		return \Illuminate\Html\FormBuilder::select($name, $list, $selected, $options);
	}

	/**
	 * Create a select range field.
	 *
	 * @param string $name
	 * @param string $begin
	 * @param string $end
	 * @param string $selected
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function selectRange($name, $begin, $end, $selected = null, $options = array()){
		return \Illuminate\Html\FormBuilder::selectRange($name, $begin, $end, $selected, $options);
	}

	/**
	 * Create a select year field.
	 *
	 * @param string $name
	 * @param string $begin
	 * @param string $end
	 * @param string $selected
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function selectYear(){
		return \Illuminate\Html\FormBuilder::selectYear();
	}

	/**
	 * Create a select month field.
	 *
	 * @param string $name
	 * @param string $selected
	 * @param array $options
	 * @param string $format
	 * @return string
	 * @static
	 */
	public static function selectMonth($name, $selected = null, $options = array(), $format = '%B'){
		return \Illuminate\Html\FormBuilder::selectMonth($name, $selected, $options, $format);
	}

	/**
	 * Get the select option for the given value.
	 *
	 * @param string $display
	 * @param string $value
	 * @param string $selected
	 * @return string
	 * @static
	 */
	public static function getSelectOption($display, $value, $selected){
		return \Illuminate\Html\FormBuilder::getSelectOption($display, $value, $selected);
	}

	/**
	 * Create a checkbox input field.
	 *
	 * @param string $name
	 * @param mixed $value
	 * @param bool $checked
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function checkbox($name, $value = 1, $checked = null, $options = array()){
		return \Illuminate\Html\FormBuilder::checkbox($name, $value, $checked, $options);
	}

	/**
	 * Create a radio button input field.
	 *
	 * @param string $name
	 * @param mixed $value
	 * @param bool $checked
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function radio($name, $value = null, $checked = null, $options = array()){
		return \Illuminate\Html\FormBuilder::radio($name, $value, $checked, $options);
	}

	/**
	 * Create a HTML reset input element.
	 *
	 * @param string $value
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function reset($value, $attributes = array()){
		return \Illuminate\Html\FormBuilder::reset($value, $attributes);
	}

	/**
	 * Create a HTML image input element.
	 *
	 * @param string $url
	 * @param string $name
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function image($url, $name = null, $attributes = array()){
		return \Illuminate\Html\FormBuilder::image($url, $name, $attributes);
	}

	/**
	 * Create a submit button element.
	 *
	 * @param string $value
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function submit($value = null, $options = array()){
		return \Illuminate\Html\FormBuilder::submit($value, $options);
	}

	/**
	 * Create a button element.
	 *
	 * @param string $value
	 * @param array $options
	 * @return string
	 * @static
	 */
	public static function button($value = null, $options = array()){
		return \Illuminate\Html\FormBuilder::button($value, $options);
	}

	/**
	 * Register a custom form macro.
	 *
	 * @param string $name
	 * @param callable $macro
	 * @return void
	 * @static
	 */
	public static function macro($name, $macro){
		\Illuminate\Html\FormBuilder::macro($name, $macro);
	}

	/**
	 * Get the ID attribute for a field name.
	 *
	 * @param string $name
	 * @param array $attributes
	 * @return string
	 * @static
	 */
	public static function getIdAttribute($name, $attributes){
		return \Illuminate\Html\FormBuilder::getIdAttribute($name, $attributes);
	}

	/**
	 * Get the value that should be assigned to the field.
	 *
	 * @param string $name
	 * @param string $value
	 * @return string
	 * @static
	 */
	public static function getValueAttribute($name, $value = null){
		return \Illuminate\Html\FormBuilder::getValueAttribute($name, $value);
	}

	/**
	 * Get a value from the session's old input.
	 *
	 * @param string $name
	 * @return string
	 * @static
	 */
	public static function old($name){
		return \Illuminate\Html\FormBuilder::old($name);
	}

	/**
	 * Determine if the old input is empty.
	 *
	 * @return bool
	 * @static
	 */
	public static function oldInputIsEmpty(){
		return \Illuminate\Html\FormBuilder::oldInputIsEmpty();
	}

	/**
	 * Get the session store implementation.
	 *
	 * @return \Illuminate\Session\Store $session
	 * @static
	 */
	public static function getSessionStore(){
		return \Illuminate\Html\FormBuilder::getSessionStore();
	}

	/**
	 * Set the session store implementation.
	 *
	 * @param \Illuminate\Session\Store $session
	 * @return \Illuminate\Html\FormBuilder
	 * @static
	 */
	public static function setSessionStore($session){
		return \Illuminate\Html\FormBuilder::setSessionStore($session);
	}

}