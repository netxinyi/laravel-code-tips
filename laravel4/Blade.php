<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 18:56
 */

class Blade extends \Illuminate\Support\Facades\Blade{

	/**
	 * Compile the view at the given path.
	 *
	 * @param string $path
	 * @return void
	 * @static
	 */
	public static function compile($path = null){
		\Illuminate\View\Compilers\BladeCompiler::compile($path);
	}

	/**
	 * Get the path currently being compiled.
	 *
	 * @return string
	 * @static
	 */
	public static function getPath(){
		return \Illuminate\View\Compilers\BladeCompiler::getPath();
	}

	/**
	 * Set the path currently being compiled.
	 *
	 * @param string $path
	 * @return void
	 * @static
	 */
	public static function setPath($path){
		\Illuminate\View\Compilers\BladeCompiler::setPath($path);
	}

	/**
	 * Compile the given Blade template contents.
	 *
	 * @param string $value
	 * @return string
	 * @static
	 */
	public static function compileString($value){
		return \Illuminate\View\Compilers\BladeCompiler::compileString($value);
	}

	/**
	 * Register a custom Blade compiler.
	 *
	 * @param \Closure $compiler
	 * @return void
	 * @static
	 */
	public static function extend($compiler){
		\Illuminate\View\Compilers\BladeCompiler::extend($compiler);
	}

	/**
	 * Compile the default values for the echo statement.
	 *
	 * @param string $value
	 * @return string
	 * @static
	 */
	public static function compileEchoDefaults($value){
		return \Illuminate\View\Compilers\BladeCompiler::compileEchoDefaults($value);
	}

	/**
	 * Get the regular expression for a generic Blade function.
	 *
	 * @param string $function
	 * @return string
	 * @static
	 */
	public static function createMatcher($function){
		return \Illuminate\View\Compilers\BladeCompiler::createMatcher($function);
	}

	/**
	 * Get the regular expression for a generic Blade function.
	 *
	 * @param string $function
	 * @return string
	 * @static
	 */
	public static function createOpenMatcher($function){
		return \Illuminate\View\Compilers\BladeCompiler::createOpenMatcher($function);
	}

	/**
	 * Create a plain Blade matcher.
	 *
	 * @param string $function
	 * @return string
	 * @static
	 */
	public static function createPlainMatcher($function){
		return \Illuminate\View\Compilers\BladeCompiler::createPlainMatcher($function);
	}

	/**
	 * Sets the content tags used for the compiler.
	 *
	 * @param string $openTag
	 * @param string $closeTag
	 * @param bool $escaped
	 * @return void
	 * @static
	 */
	public static function setContentTags($openTag, $closeTag, $escaped = false){
		\Illuminate\View\Compilers\BladeCompiler::setContentTags($openTag, $closeTag, $escaped);
	}

	/**
	 * Sets the escaped content tags used for the compiler.
	 *
	 * @param string $openTag
	 * @param string $closeTag
	 * @return void
	 * @static
	 */
	public static function setEscapedContentTags($openTag, $closeTag){
		\Illuminate\View\Compilers\BladeCompiler::setEscapedContentTags($openTag, $closeTag);
	}

	/**
	 * Gets the content tags used for the compiler.
	 *
	 * @return string
	 * @static
	 */
	public static function getContentTags(){
		return \Illuminate\View\Compilers\BladeCompiler::getContentTags();
	}

	/**
	 * Gets the escaped content tags used for the compiler.
	 *
	 * @return string
	 * @static
	 */
	public static function getEscapedContentTags(){
		return \Illuminate\View\Compilers\BladeCompiler::getEscapedContentTags();
	}

	/**
	 * Get the path to the compiled version of a view.
	 *
	 * @param string $path
	 * @return string
	 * @static
	 */
	public static function getCompiledPath($path){
		//Method inherited from \Illuminate\View\Compilers\Compiler
		return \Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
	}

	/**
	 * Determine if the view at the given path is expired.
	 *
	 * @param string $path
	 * @return bool
	 * @static
	 */
	public static function isExpired($path){
		//Method inherited from \Illuminate\View\Compilers\Compiler
		return \Illuminate\View\Compilers\BladeCompiler::isExpired($path);
	}

}
