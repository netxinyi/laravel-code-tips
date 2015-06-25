<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:28
 */

class View extends \Illuminate\Support\Facades\View{

	/**
	 * Get the evaluated view contents for the given view.
	 *
	 * @param string $view
	 * @param array $data
	 * @param array $mergeData
	 * @return \Illuminate\View\View
	 * @static
	 */
	public static function make($view, $data = array(), $mergeData = array()){
		return \Illuminate\View\Environment::make($view, $data, $mergeData);
	}

	/**
	 * Get the evaluated view contents for a named view.
	 *
	 * @param string $view
	 * @param mixed $data
	 * @return \Illuminate\View\View
	 * @static
	 */
	public static function of($view, $data = array()){
		return \Illuminate\View\Environment::of($view, $data);
	}

	/**
	 * Register a named view.
	 *
	 * @param string $view
	 * @param string $name
	 * @return void
	 * @static
	 */
	public static function name($view, $name){
		\Illuminate\View\Environment::name($view, $name);
	}

	/**
	 * Determine if a given view exists.
	 *
	 * @param string $view
	 * @return bool
	 * @static
	 */
	public static function exists($view){
		return \Illuminate\View\Environment::exists($view);
	}

	/**
	 * Get the rendered contents of a partial from a loop.
	 *
	 * @param string $view
	 * @param array $data
	 * @param string $iterator
	 * @param string $empty
	 * @return string
	 * @static
	 */
	public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
		return \Illuminate\View\Environment::renderEach($view, $data, $iterator, $empty);
	}

	/**
	 * Add a piece of shared data to the environment.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 * @static
	 */
	public static function share($key, $value = null){
		\Illuminate\View\Environment::share($key, $value);
	}

	/**
	 * Register a view creator event.
	 *
	 * @param array|string $views
	 * @param \Closure|string $callback
	 * @return array
	 * @static
	 */
	public static function creator($views, $callback){
		return \Illuminate\View\Environment::creator($views, $callback);
	}

	/**
	 * Register multiple view composers via an array.
	 *
	 * @param array $composers
	 * @return array
	 * @static
	 */
	public static function composers($composers){
		return \Illuminate\View\Environment::composers($composers);
	}

	/**
	 * Register a view composer event.
	 *
	 * @param array|string $views
	 * @param \Closure|string $callback
	 * @return array
	 * @static
	 */
	public static function composer($views, $callback, $priority = null){
		return \Illuminate\View\Environment::composer($views, $callback, $priority);
	}

	/**
	 * Call the composer for a given view.
	 *
	 * @param \Illuminate\View\View $view
	 * @return void
	 * @static
	 */
	public static function callComposer($view){
		\Illuminate\View\Environment::callComposer($view);
	}

	/**
	 * Call the creator for a given view.
	 *
	 * @param \Illuminate\View\View $view
	 * @return void
	 * @static
	 */
	public static function callCreator($view){
		\Illuminate\View\Environment::callCreator($view);
	}

	/**
	 * Start injecting content into a section.
	 *
	 * @param string $section
	 * @param string $content
	 * @return void
	 * @static
	 */
	public static function startSection($section, $content = ''){
		\Illuminate\View\Environment::startSection($section, $content);
	}

	/**
	 * Inject inline content into a section.
	 *
	 * @param string $section
	 * @param string $content
	 * @return void
	 * @static
	 */
	public static function inject($section, $content){
		\Illuminate\View\Environment::inject($section, $content);
	}

	/**
	 * Stop injecting content into a section and return its contents.
	 *
	 * @return string
	 * @static
	 */
	public static function yieldSection(){
		return \Illuminate\View\Environment::yieldSection();
	}

	/**
	 * Stop injecting content into a section.
	 *
	 * @param bool $overwrite
	 * @return string
	 * @static
	 */
	public static function stopSection($overwrite = false){
		return \Illuminate\View\Environment::stopSection($overwrite);
	}

	/**
	 * Stop injecting content into a section and append it.
	 *
	 * @return string
	 * @static
	 */
	public static function appendSection(){
		return \Illuminate\View\Environment::appendSection();
	}

	/**
	 * Get the string contents of a section.
	 *
	 * @param string $section
	 * @param string $default
	 * @return string
	 * @static
	 */
	public static function yieldContent($section, $default = ''){
		return \Illuminate\View\Environment::yieldContent($section, $default);
	}

	/**
	 * Flush all of the section contents.
	 *
	 * @return void
	 * @static
	 */
	public static function flushSections(){
		\Illuminate\View\Environment::flushSections();
	}

	/**
	 * Flush all of the section contents if done rendering.
	 *
	 * @return void
	 * @static
	 */
	public static function flushSectionsIfDoneRendering(){
		\Illuminate\View\Environment::flushSectionsIfDoneRendering();
	}

	/**
	 * Increment the rendering counter.
	 *
	 * @return void
	 * @static
	 */
	public static function incrementRender(){
		\Illuminate\View\Environment::incrementRender();
	}

	/**
	 * Decrement the rendering counter.
	 *
	 * @return void
	 * @static
	 */
	public static function decrementRender(){
		\Illuminate\View\Environment::decrementRender();
	}

	/**
	 * Check if there are no active render operations.
	 *
	 * @return bool
	 * @static
	 */
	public static function doneRendering(){
		return \Illuminate\View\Environment::doneRendering();
	}

	/**
	 * Add a location to the array of view locations.
	 *
	 * @param string $location
	 * @return void
	 * @static
	 */
	public static function addLocation($location){
		\Illuminate\View\Environment::addLocation($location);
	}

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string $namespace
	 * @param string|array $hints
	 * @return void
	 * @static
	 */
	public static function addNamespace($namespace, $hints){
		\Illuminate\View\Environment::addNamespace($namespace, $hints);
	}

	/**
	 * Prepend a new namespace to the loader.
	 *
	 * @param string $namespace
	 * @param string|array $hints
	 * @return void
	 * @static
	 */
	public static function prependNamespace($namespace, $hints){
		\Illuminate\View\Environment::prependNamespace($namespace, $hints);
	}

	/**
	 * Register a valid view extension and its engine.
	 *
	 * @param string $extension
	 * @param string $engine
	 * @param \Closure $resolver
	 * @return void
	 * @static
	 */
	public static function addExtension($extension, $engine, $resolver = null){
		\Illuminate\View\Environment::addExtension($extension, $engine, $resolver);
	}

	/**
	 * Get the extension to engine bindings.
	 *
	 * @return array
	 * @static
	 */
	public static function getExtensions(){
		return \Illuminate\View\Environment::getExtensions();
	}

	/**
	 * Get the engine resolver instance.
	 *
	 * @return \Illuminate\View\Engines\EngineResolver
	 * @static
	 */
	public static function getEngineResolver(){
		return \Illuminate\View\Environment::getEngineResolver();
	}

	/**
	 * Get the view finder instance.
	 *
	 * @return \Illuminate\View\ViewFinderInterface
	 * @static
	 */
	public static function getFinder(){
		return \Illuminate\View\Environment::getFinder();
	}

	/**
	 * Set the view finder instance.
	 *
	 * @return void
	 * @static
	 */
	public static function setFinder($finder){
		\Illuminate\View\Environment::setFinder($finder);
	}

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static
	 */
	public static function getDispatcher(){
		return \Illuminate\View\Environment::getDispatcher();
	}

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @return void
	 * @static
	 */
	public static function setDispatcher($events){
		\Illuminate\View\Environment::setDispatcher($events);
	}

	/**
	 * Get the IoC container instance.
	 *
	 * @return \Illuminate\Container\Container
	 * @static
	 */
	public static function getContainer(){
		return \Illuminate\View\Environment::getContainer();
	}

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container\Container $container
	 * @return void
	 * @static
	 */
	public static function setContainer($container){
		\Illuminate\View\Environment::setContainer($container);
	}

	/**
	 * Get an item from the shared data.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed
	 * @static
	 */
	public static function shared($key, $default = null){
		return \Illuminate\View\Environment::shared($key, $default);
	}

	/**
	 * Get all of the shared data for the environment.
	 *
	 * @return array
	 * @static
	 */
	public static function getShared(){
		return \Illuminate\View\Environment::getShared();
	}

	/**
	 * Get the entire array of sections.
	 *
	 * @return array
	 * @static
	 */
	public static function getSections(){
		return \Illuminate\View\Environment::getSections();
	}

	/**
	 * Get all of the registered named views in environment.
	 *
	 * @return array
	 * @static
	 */
	public static function getNames(){
		return \Illuminate\View\Environment::getNames();
	}

}