<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 18:51
 */
namespace {
	exit( "该文件不能被引入,仅用于代码提示" );


	class Route extends \Illuminate\Support\Facades\Route
	{


		/**
		 * Register a new GET route with the router.
		 *
		 * @param string                $uri
		 * @param \Closure|array|string $action
		 *
		 * @return \Illuminate\Routing\Route
		 * @static
		 */
		public static function get($uri, $action){

			return \Illuminate\Routing\Router::get($uri, $action);
		}


		/**
		 * Register a new POST route with the router.
		 *
		 * @param string                $uri
		 * @param \Closure|array|string $action
		 *
		 * @return \Illuminate\Routing\Route
		 * @static
		 */
		public static function post($uri, $action){

			return \Illuminate\Routing\Router::post($uri, $action);
		}


		/**
		 * Register a new PUT route with the router.
		 *
		 * @param string                $uri
		 * @param \Closure|array|string $action
		 *
		 * @return \Illuminate\Routing\Route
		 * @static
		 */
		public static function put($uri, $action){

			return \Illuminate\Routing\Router::put($uri, $action);
		}


		/**
		 * Register a new PATCH route with the router.
		 *
		 * @param string                $uri
		 * @param \Closure|array|string $action
		 *
		 * @return \Illuminate\Routing\Route
		 * @static
		 */
		public static function patch($uri, $action){

			return \Illuminate\Routing\Router::patch($uri, $action);
		}


		/**
		 * Register a new DELETE route with the router.
		 *
		 * @param string                $uri
		 * @param \Closure|array|string $action
		 *
		 * @return \Illuminate\Routing\Route
		 * @static
		 */
		public static function delete($uri, $action){

			return \Illuminate\Routing\Router::delete($uri, $action);
		}


		/**
		 * Register a new OPTIONS route with the router.
		 *
		 * @param string                $uri
		 * @param \Closure|array|string $action
		 *
		 * @return \Illuminate\Routing\Route
		 * @static
		 */
		public static function options($uri, $action){

			return \Illuminate\Routing\Router::options($uri, $action);
		}


		/**
		 * Register a new route responding to all verbs.
		 *
		 * @param string                $uri
		 * @param \Closure|array|string $action
		 *
		 * @return \Illuminate\Routing\Route
		 * @static
		 */
		public static function any($uri, $action){

			return \Illuminate\Routing\Router::any($uri, $action);
		}


		/**
		 * Register a new route with the given verbs.
		 *
		 * @param array|string          $methods
		 * @param string                $uri
		 * @param \Closure|array|string $action
		 *
		 * @return \Illuminate\Routing\Route
		 * @static
		 */
		public static function match($methods, $uri, $action){

			return \Illuminate\Routing\Router::match($methods, $uri, $action);
		}


		/**
		 * Register an array of controllers with wildcard routing.
		 *
		 * @param array $controllers
		 *
		 * @return void
		 * @static
		 */
		public static function controllers($controllers){

			\Illuminate\Routing\Router::controllers($controllers);
		}


		/**
		 * Route a controller to a URI with wildcard routing.
		 *
		 * @param string $uri
		 * @param string $controller
		 * @param array  $names
		 *
		 * @return void
		 * @static
		 */
		public static function controller($uri, $controller, $names = array()){

			\Illuminate\Routing\Router::controller($uri, $controller, $names);
		}


		/**
		 * Route a resource to a controller.
		 *
		 * @param string $name
		 * @param string $controller
		 * @param array  $options
		 *
		 * @return void
		 * @static
		 */
		public static function resource($name, $controller, $options = array()){

			\Illuminate\Routing\Router::resource($name, $controller, $options);
		}


		/**
		 * Get the base resource URI for a given resource.
		 *
		 * @param string $resource
		 *
		 * @return string
		 * @static
		 */
		public static function getResourceUri($resource){

			return \Illuminate\Routing\Router::getResourceUri($resource);
		}


		/**
		 * Format a resource wildcard for usage.
		 *
		 * @param string $value
		 *
		 * @return string
		 * @static
		 */
		public static function getResourceWildcard($value){

			return \Illuminate\Routing\Router::getResourceWildcard($value);
		}


		/**
		 * Create a route group with shared attributes.
		 *
		 * @param array    $attributes
		 * @param \Closure $callback
		 *
		 * @return void
		 * @static
		 */
		public static function group($attributes, $callback){

			\Illuminate\Routing\Router::group($attributes, $callback);
		}


		/**
		 * Merge the given array with the last group stack.
		 *
		 * @param array $new
		 *
		 * @return array
		 * @static
		 */
		public static function mergeWithLastGroup($new){

			return \Illuminate\Routing\Router::mergeWithLastGroup($new);
		}


		/**
		 * Merge the given group attributes.
		 *
		 * @param array $new
		 * @param array $old
		 *
		 * @return array
		 * @static
		 */
		public static function mergeGroup($new, $old){

			return \Illuminate\Routing\Router::mergeGroup($new, $old);
		}


		/**
		 * Dispatch the request to the application.
		 *
		 * @param \Illuminate\Http\Request $request
		 *
		 * @return \Illuminate\Http\Response
		 * @static
		 */
		public static function dispatch($request){

			return \Illuminate\Routing\Router::dispatch($request);
		}


		/**
		 * Dispatch the request to a route and return the response.
		 *
		 * @param \Illuminate\Http\Request $request
		 *
		 * @return mixed
		 * @static
		 */
		public static function dispatchToRoute($request){

			return \Illuminate\Routing\Router::dispatchToRoute($request);
		}


		/**
		 * Register a route matched event listener.
		 *
		 * @param callable $callback
		 *
		 * @return void
		 * @static
		 */
		public static function matched($callback){

			\Illuminate\Routing\Router::matched($callback);
		}


		/**
		 * Register a new "before" filter with the router.
		 *
		 * @param mixed $callback
		 *
		 * @return void
		 * @static
		 */
		public static function before($callback){

			\Illuminate\Routing\Router::before($callback);
		}


		/**
		 * Register a new "after" filter with the router.
		 *
		 * @param mixed $callback
		 *
		 * @return void
		 * @static
		 */
		public static function after($callback){

			\Illuminate\Routing\Router::after($callback);
		}


		/**
		 * Register a new filter with the router.
		 *
		 * @param string $name
		 * @param mixed  $callback
		 *
		 * @return void
		 * @static
		 */
		public static function filter($name, $callback){

			\Illuminate\Routing\Router::filter($name, $callback);
		}


		/**
		 * Register a pattern-based filter with the router.
		 *
		 * @param string     $pattern
		 * @param string     $name
		 * @param array|null $methods
		 *
		 * @static
		 */
		public static function when($pattern, $name, $methods = NULL){

			return \Illuminate\Routing\Router::when($pattern, $name, $methods);
		}


		/**
		 * Register a regular expression based filter with the router.
		 *
		 * @param string     $pattern
		 * @param string     $name
		 * @param array|null $methods
		 *
		 * @return void
		 * @static
		 */
		public static function whenRegex($pattern, $name, $methods = NULL){

			\Illuminate\Routing\Router::whenRegex($pattern, $name, $methods);
		}


		/**
		 * Register a model binder for a wildcard.
		 *
		 * @param string   $key
		 * @param string   $class
		 * @param \Closure $callback
		 *
		 * @return void
		 * @throws NotFoundHttpException
		 * @static
		 */
		public static function model($key, $class, $callback = NULL){

			\Illuminate\Routing\Router::model($key, $class, $callback);
		}


		/**
		 * Add a new route parameter binder.
		 *
		 * @param string   $key
		 * @param callable $binder
		 *
		 * @return void
		 * @static
		 */
		public static function bind($key, $binder){

			\Illuminate\Routing\Router::bind($key, $binder);
		}


		/**
		 * Set a global where pattern on all routes
		 *
		 * @param string $key
		 * @param string $pattern
		 *
		 * @return void
		 * @static
		 */
		public static function pattern($key, $pattern){

			\Illuminate\Routing\Router::pattern($key, $pattern);
		}


		/**
		 * Call the given route's before filters.
		 *
		 * @param \Illuminate\Routing\Route $route
		 * @param \Illuminate\Http\Request  $request
		 *
		 * @return mixed
		 * @static
		 */
		public static function callRouteBefore($route, $request){

			return \Illuminate\Routing\Router::callRouteBefore($route, $request);
		}


		/**
		 * Find the patterned filters matching a request.
		 *
		 * @param \Illuminate\Http\Request $request
		 *
		 * @return array
		 * @static
		 */
		public static function findPatternFilters($request){

			return \Illuminate\Routing\Router::findPatternFilters($request);
		}


		/**
		 * Call the given route's before filters.
		 *
		 * @param \Illuminate\Routing\Route $route
		 * @param \Illuminate\Http\Request  $request
		 * @param \Illuminate\Http\Response $response
		 *
		 * @return mixed
		 * @static
		 */
		public static function callRouteAfter($route, $request, $response){

			return \Illuminate\Routing\Router::callRouteAfter($route, $request, $response);
		}


		/**
		 * Call the given route filter.
		 *
		 * @param string                         $filter
		 * @param array                          $parameters
		 * @param \Illuminate\Routing\Route      $route
		 * @param \Illuminate\Http\Request       $request
		 * @param \Illuminate\Http\Response|null $response
		 *
		 * @return mixed
		 * @static
		 */
		public static function callRouteFilter($filter, $parameters, $route, $request, $response = NULL){

			return \Illuminate\Routing\Router::callRouteFilter($filter, $parameters, $route, $request, $response);
		}


		/**
		 * Run a callback with filters disable on the router.
		 *
		 * @param callable $callback
		 *
		 * @return void
		 * @static
		 */
		public static function withoutFilters($callback){

			\Illuminate\Routing\Router::withoutFilters($callback);
		}


		/**
		 * Enable route filtering on the router.
		 *
		 * @return void
		 * @static
		 */
		public static function enableFilters(){

			\Illuminate\Routing\Router::enableFilters();
		}


		/**
		 * Disable route filtering on the router.
		 *
		 * @return void
		 * @static
		 */
		public static function disableFilters(){

			\Illuminate\Routing\Router::disableFilters();
		}


		/**
		 * Get a route parameter for the current route.
		 *
		 * @param string $key
		 * @param string $default
		 *
		 * @return mixed
		 * @static
		 */
		public static function input($key, $default = NULL){

			return \Illuminate\Routing\Router::input($key, $default);
		}


		/**
		 * Get the currently dispatched route instance.
		 *
		 * @return \Illuminate\Routing\Route
		 * @static
		 */
		public static function getCurrentRoute(){

			return \Illuminate\Routing\Router::getCurrentRoute();
		}


		/**
		 * Get the currently dispatched route instance.
		 *
		 * @return \Illuminate\Routing\Route
		 * @static
		 */
		public static function current(){

			return \Illuminate\Routing\Router::current();
		}


		/**
		 * Get the current route name.
		 *
		 * @return string|null
		 * @static
		 */
		public static function currentRouteName(){

			return \Illuminate\Routing\Router::currentRouteName();
		}


		/**
		 * Alias for the "currentRouteNamed" method.
		 *
		 * @param mixed  string
		 *
		 * @return bool
		 * @static
		 */
		public static function is(){

			return \Illuminate\Routing\Router::is();
		}


		/**
		 * Determine if the current route matches a given name.
		 *
		 * @param string $name
		 *
		 * @return bool
		 * @static
		 */
		public static function currentRouteNamed($name){

			return \Illuminate\Routing\Router::currentRouteNamed($name);
		}


		/**
		 * Get the current route action.
		 *
		 * @return string|null
		 * @static
		 */
		public static function currentRouteAction(){

			return \Illuminate\Routing\Router::currentRouteAction();
		}


		/**
		 * Alias for the "currentRouteUses" method.
		 *
		 * @param mixed  string
		 *
		 * @return bool
		 * @static
		 */
		public static function isAction(){

			return \Illuminate\Routing\Router::isAction();
		}


		/**
		 * Determine if the current route action matches a given action.
		 *
		 * @param string $action
		 *
		 * @return bool
		 * @static
		 */
		public static function currentRouteUses($action){

			return \Illuminate\Routing\Router::currentRouteUses($action);
		}


		/**
		 * Get the request currently being dispatched.
		 *
		 * @return \Illuminate\Http\Request
		 * @static
		 */
		public static function getCurrentRequest(){

			return \Illuminate\Routing\Router::getCurrentRequest();
		}


		/**
		 * Get the underlying route collection.
		 *
		 * @return \Illuminate\Routing\RouteCollection
		 * @static
		 */
		public static function getRoutes(){

			return \Illuminate\Routing\Router::getRoutes();
		}


		/**
		 * Get the controller dispatcher instance.
		 *
		 * @return \Illuminate\Routing\ControllerDispatcher
		 * @static
		 */
		public static function getControllerDispatcher(){

			return \Illuminate\Routing\Router::getControllerDispatcher();
		}


		/**
		 * Set the controller dispatcher instance.
		 *
		 * @param \Illuminate\Routing\ControllerDispatcher $dispatcher
		 *
		 * @return void
		 * @static
		 */
		public static function setControllerDispatcher($dispatcher){

			\Illuminate\Routing\Router::setControllerDispatcher($dispatcher);
		}


		/**
		 * Get a controller inspector instance.
		 *
		 * @return \Illuminate\Routing\ControllerInspector
		 * @static
		 */
		public static function getInspector(){

			return \Illuminate\Routing\Router::getInspector();
		}


		/**
		 * Get the response for a given request.
		 *
		 * @param \Symfony\Component\HttpFoundation\Request $request
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 * @static
		 */
		public static function handle($request, $type = 1, $catch = TRUE){

			return \Illuminate\Routing\Router::handle($request, $type, $catch);
		}

	}

}