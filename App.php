<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 18:55
 */

class App extends \Illuminate\Support\Facades\App{

	/**
	 * Bind the installation paths to the application.
	 *
	 * @param array $paths
	 * @return void
	 * @static
	 */
	public static function bindInstallPaths($paths){
		\Illuminate\Foundation\Application::bindInstallPaths($paths);
	}

	/**
	 * Get the application bootstrap file.
	 *
	 * @return string
	 * @static
	 */
	public static function getBootstrapFile(){
		return \Illuminate\Foundation\Application::getBootstrapFile();
	}

	/**
	 * Start the exception handling for the request.
	 *
	 * @return void
	 * @static
	 */
	public static function startExceptionHandling(){
		\Illuminate\Foundation\Application::startExceptionHandling();
	}

	/**
	 * Get or check the current application environment.
	 *
	 * @param mixed
	 * @return string
	 * @static
	 */
	public static function environment(){
		return \Illuminate\Foundation\Application::environment();
	}

	/**
	 * Determine if application is in local environment.
	 *
	 * @return bool
	 * @static
	 */
	public static function isLocal(){
		return \Illuminate\Foundation\Application::isLocal();
	}

	/**
	 * Detect the application's current environment.
	 *
	 * @param array|string $envs
	 * @return string
	 * @static
	 */
	public static function detectEnvironment($envs){
		return \Illuminate\Foundation\Application::detectEnvironment($envs);
	}

	/**
	 * Determine if we are running in the console.
	 *
	 * @return bool
	 * @static
	 */
	public static function runningInConsole(){
		return \Illuminate\Foundation\Application::runningInConsole();
	}

	/**
	 * Determine if we are running unit tests.
	 *
	 * @return bool
	 * @static
	 */
	public static function runningUnitTests(){
		return \Illuminate\Foundation\Application::runningUnitTests();
	}

	/**
	 * Force register a service provider with the application.
	 *
	 * @param \Illuminate\Support\ServiceProvider|string $provider
	 * @param array $options
	 * @return \Illuminate\Support\ServiceProvider
	 * @static
	 */
	public static function forgeRegister($provider, $options = array()){
		return \Illuminate\Foundation\Application::forgeRegister($provider, $options);
	}

	/**
	 * Register a service provider with the application.
	 *
	 * @param \Illuminate\Support\ServiceProvider|string $provider
	 * @param array $options
	 * @param bool $force
	 * @return \Illuminate\Support\ServiceProvider
	 * @static
	 */
	public static function register($provider, $options = array(), $force = false){
		return \Illuminate\Foundation\Application::register($provider, $options, $force);
	}

	/**
	 * Get the registered service provider instance if it exists.
	 *
	 * @param \Illuminate\Support\ServiceProvider|string $provider
	 * @return \Illuminate\Support\ServiceProvider|null
	 * @static
	 */
	public static function getRegistered($provider){
		return \Illuminate\Foundation\Application::getRegistered($provider);
	}

	/**
	 * Resolve a service provider instance from the class name.
	 *
	 * @param string $provider
	 * @return \Illuminate\Support\ServiceProvider
	 * @static
	 */
	public static function resolveProviderClass($provider){
		return \Illuminate\Foundation\Application::resolveProviderClass($provider);
	}

	/**
	 * Load and boot all of the remaining deferred providers.
	 *
	 * @return void
	 * @static
	 */
	public static function loadDeferredProviders(){
		\Illuminate\Foundation\Application::loadDeferredProviders();
	}

	/**
	 * Register a deferred provider and service.
	 *
	 * @param string $provider
	 * @param string $service
	 * @return void
	 * @static
	 */
	public static function registerDeferredProvider($provider, $service = null){
		\Illuminate\Foundation\Application::registerDeferredProvider($provider, $service);
	}

	/**
	 * Resolve the given type from the container.
	 *
	 * (Overriding Container::make)
	 *
	 * @param string $abstract
	 * @param array $parameters
	 * @return mixed
	 * @static
	 */
	public static function make($abstract, $parameters = array()){
		return \Illuminate\Foundation\Application::make($abstract, $parameters);
	}

	/**
	 * Register a "before" application filter.
	 *
	 * @param \Closure|string $callback
	 * @return void
	 * @static
	 */
	public static function before($callback){
		\Illuminate\Foundation\Application::before($callback);
	}

	/**
	 * Register an "after" application filter.
	 *
	 * @param \Closure|string $callback
	 * @return void
	 * @static
	 */
	public static function after($callback){
		\Illuminate\Foundation\Application::after($callback);
	}

	/**
	 * Register a "finish" application filter.
	 *
	 * @param \Closure|string $callback
	 * @return void
	 * @static
	 */
	public static function finish($callback){
		\Illuminate\Foundation\Application::finish($callback);
	}

	/**
	 * Register a "shutdown" callback.
	 *
	 * @param callable $callback
	 * @return void
	 * @static
	 */
	public static function shutdown($callback = null){
		\Illuminate\Foundation\Application::shutdown($callback);
	}

	/**
	 * Register a function for determining when to use array sessions.
	 *
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function useArraySessions($callback){
		\Illuminate\Foundation\Application::useArraySessions($callback);
	}

	/**
	 * Determine if the application has booted.
	 *
	 * @return bool
	 * @static
	 */
	public static function isBooted(){
		return \Illuminate\Foundation\Application::isBooted();
	}

	/**
	 * Boot the application's service providers.
	 *
	 * @return void
	 * @static
	 */
	public static function boot(){
		\Illuminate\Foundation\Application::boot();
	}

	/**
	 * Register a new boot listener.
	 *
	 * @param mixed $callback
	 * @return void
	 * @static
	 */
	public static function booting($callback){
		\Illuminate\Foundation\Application::booting($callback);
	}

	/**
	 * Register a new "booted" listener.
	 *
	 * @param mixed $callback
	 * @return void
	 * @static
	 */
	public static function booted($callback){
		\Illuminate\Foundation\Application::booted($callback);
	}

	/**
	 * Run the application and send the response.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @return void
	 * @static
	 */
	public static function run($request = null){
		\Illuminate\Foundation\Application::run($request);
	}

	/**
	 * Add a HttpKernel middleware onto the stack.
	 *
	 * @param string $class
	 * @param array $parameters
	 * @return \Illuminate\Foundation\Application
	 * @static
	 */
	public static function middleware($class, $parameters = array()){
		return \Illuminate\Foundation\Application::middleware($class, $parameters);
	}

	/**
	 * Remove a custom middleware from the application.
	 *
	 * @param string $class
	 * @return void
	 * @static
	 */
	public static function forgetMiddleware($class){
		\Illuminate\Foundation\Application::forgetMiddleware($class);
	}

	/**
	 * Handle the given request and get the response.
	 *
	 * Provides compatibility with BrowserKit functional testing.
	 *
	 * @implements HttpKernelInterface::handle
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @param int $type
	 * @param bool $catch
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static
	 */
	public static function handle($request, $type = 1, $catch = true){
		return \Illuminate\Foundation\Application::handle($request, $type, $catch);
	}

	/**
	 * Handle the given request and get the response.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static
	 */
	public static function dispatch($request){
		return \Illuminate\Foundation\Application::dispatch($request);
	}

	/**
	 * Terminate the request and send the response to the browser.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @param \Symfony\Component\HttpFoundation\Response $response
	 * @return void
	 * @static
	 */
	public static function terminate($request, $response){
		\Illuminate\Foundation\Application::terminate($request, $response);
	}

	/**
	 * Call the "finish" callbacks assigned to the application.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @param \Symfony\Component\HttpFoundation\Response $response
	 * @return void
	 * @static
	 */
	public static function callFinishCallbacks($request, $response){
		\Illuminate\Foundation\Application::callFinishCallbacks($request, $response);
	}

	/**
	 * Prepare the request by injecting any services.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Request
	 * @static
	 */
	public static function prepareRequest($request){
		return \Illuminate\Foundation\Application::prepareRequest($request);
	}

	/**
	 * Prepare the given value as a Response object.
	 *
	 * @param mixed $value
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static
	 */
	public static function prepareResponse($value){
		return \Illuminate\Foundation\Application::prepareResponse($value);
	}

	/**
	 * Determine if the application is ready for responses.
	 *
	 * @return bool
	 * @static
	 */
	public static function readyForResponses(){
		return \Illuminate\Foundation\Application::readyForResponses();
	}

	/**
	 * Determine if the application is currently down for maintenance.
	 *
	 * @return bool
	 * @static
	 */
	public static function isDownForMaintenance(){
		return \Illuminate\Foundation\Application::isDownForMaintenance();
	}

	/**
	 * Register a maintenance mode event listener.
	 *
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function down($callback){
		\Illuminate\Foundation\Application::down($callback);
	}

	/**
	 * Throw an HttpException with the given data.
	 *
	 * @param int $code
	 * @param string $message
	 * @param array $headers
	 * @return void
	 * @throws \Symfony\Component\HttpKernel\Exception\HttpException
	 * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
	 * @static
	 */
	public static function abort($code, $message = '', $headers = array()){
		\Illuminate\Foundation\Application::abort($code, $message, $headers);
	}

	/**
	 * Register a 404 error handler.
	 *
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function missing($callback){
		\Illuminate\Foundation\Application::missing($callback);
	}

	/**
	 * Register an application error handler.
	 *
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function error($callback){
		\Illuminate\Foundation\Application::error($callback);
	}

	/**
	 * Register an error handler at the bottom of the stack.
	 *
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function pushError($callback){
		\Illuminate\Foundation\Application::pushError($callback);
	}

	/**
	 * Register an error handler for fatal errors.
	 *
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function fatal($callback){
		\Illuminate\Foundation\Application::fatal($callback);
	}

	/**
	 * Get the configuration loader instance.
	 *
	 * @return \Illuminate\Config\LoaderInterface
	 * @static
	 */
	public static function getConfigLoader(){
		return \Illuminate\Foundation\Application::getConfigLoader();
	}

	/**
	 * Get the environment variables loader instance.
	 *
	 * @return \Illuminate\Config\EnvironmentVariablesLoaderInterface
	 * @static
	 */
	public static function getEnvironmentVariablesLoader(){
		return \Illuminate\Foundation\Application::getEnvironmentVariablesLoader();
	}

	/**
	 * Get the service provider repository instance.
	 *
	 * @return \Illuminate\Foundation\ProviderRepository
	 * @static
	 */
	public static function getProviderRepository(){
		return \Illuminate\Foundation\Application::getProviderRepository();
	}

	/**
	 * Get the service providers that have been loaded.
	 *
	 * @return array
	 * @static
	 */
	public static function getLoadedProviders(){
		return \Illuminate\Foundation\Application::getLoadedProviders();
	}

	/**
	 * Set the application's deferred services.
	 *
	 * @param array $services
	 * @return void
	 * @static
	 */
	public static function setDeferredServices($services){
		\Illuminate\Foundation\Application::setDeferredServices($services);
	}

	/**
	 * Determine if the given service is a deferred service.
	 *
	 * @param string $service
	 * @return bool
	 * @static
	 */
	public static function isDeferredService($service){
		return \Illuminate\Foundation\Application::isDeferredService($service);
	}

	/**
	 * Get or set the request class for the application.
	 *
	 * @param string $class
	 * @return string
	 * @static
	 */
	public static function requestClass($class = null){
		return \Illuminate\Foundation\Application::requestClass($class);
	}

	/**
	 * Set the application request for the console environment.
	 *
	 * @return void
	 * @static
	 */
	public static function setRequestForConsoleEnvironment(){
		\Illuminate\Foundation\Application::setRequestForConsoleEnvironment();
	}

	/**
	 * Call a method on the default request class.
	 *
	 * @param string $method
	 * @param array $parameters
	 * @return mixed
	 * @static
	 */
	public static function onRequest($method, $parameters = array()){
		return \Illuminate\Foundation\Application::onRequest($method, $parameters);
	}

	/**
	 * Get the current application locale.
	 *
	 * @return string
	 * @static
	 */
	public static function getLocale(){
		return \Illuminate\Foundation\Application::getLocale();
	}

	/**
	 * Set the current application locale.
	 *
	 * @param string $locale
	 * @return void
	 * @static
	 */
	public static function setLocale($locale){
		\Illuminate\Foundation\Application::setLocale($locale);
	}

	/**
	 * Register the core class aliases in the container.
	 *
	 * @return void
	 * @static
	 */
	public static function registerCoreContainerAliases(){
		\Illuminate\Foundation\Application::registerCoreContainerAliases();
	}

	/**
	 * Determine if the given abstract type has been bound.
	 *
	 * @param string $abstract
	 * @return bool
	 * @static
	 */
	public static function bound($abstract){
		//Method inherited from \Illuminate\Container\Container
		return \Illuminate\Foundation\Application::bound($abstract);
	}

	/**
	 * Determine if a given string is an alias.
	 *
	 * @param string $name
	 * @return bool
	 * @static
	 */
	public static function isAlias($name){
		//Method inherited from \Illuminate\Container\Container
		return \Illuminate\Foundation\Application::isAlias($name);
	}

	/**
	 * Register a binding with the container.
	 *
	 * @param string $abstract
	 * @param \Closure|string|null $concrete
	 * @param bool $shared
	 * @return void
	 * @static
	 */
	public static function bind($abstract, $concrete = null, $shared = false){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
	}

	/**
	 * Register a binding if it hasn't already been registered.
	 *
	 * @param string $abstract
	 * @param \Closure|string|null $concrete
	 * @param bool $shared
	 * @return void
	 * @static
	 */
	public static function bindIf($abstract, $concrete = null, $shared = false){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
	}

	/**
	 * Register a shared binding in the container.
	 *
	 * @param string $abstract
	 * @param \Closure|string|null $concrete
	 * @return void
	 * @static
	 */
	public static function singleton($abstract, $concrete = null){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::singleton($abstract, $concrete);
	}

	/**
	 * Wrap a Closure such that it is shared.
	 *
	 * @param \Closure $closure
	 * @return \Illuminate\Container\Closure
	 * @static
	 */
	public static function share($closure){
		//Method inherited from \Illuminate\Container\Container
		return \Illuminate\Foundation\Application::share($closure);
	}

	/**
	 * Bind a shared Closure into the container.
	 *
	 * @param string $abstract
	 * @param \Closure $closure
	 * @return void
	 * @static
	 */
	public static function bindShared($abstract, $closure){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::bindShared($abstract, $closure);
	}

	/**
	 * "Extend" an abstract type in the container.
	 *
	 * @param string $abstract
	 * @param \Closure $closure
	 * @return void
	 * @throws \InvalidArgumentException
	 * @static
	 */
	public static function extend($abstract, $closure){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::extend($abstract, $closure);
	}

	/**
	 * Register an existing instance as shared in the container.
	 *
	 * @param string $abstract
	 * @param mixed $instance
	 * @return void
	 * @static
	 */
	public static function instance($abstract, $instance){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::instance($abstract, $instance);
	}

	/**
	 * Alias a type to a shorter name.
	 *
	 * @param string $abstract
	 * @param string $alias
	 * @return void
	 * @static
	 */
	public static function alias($abstract, $alias){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::alias($abstract, $alias);
	}

	/**
	 * Bind a new callback to an abstract's rebind event.
	 *
	 * @param string $abstract
	 * @param \Closure $callback
	 * @return mixed
	 * @static
	 */
	public static function rebinding($abstract, $callback){
		//Method inherited from \Illuminate\Container\Container
		return \Illuminate\Foundation\Application::rebinding($abstract, $callback);
	}

	/**
	 * Refresh an instance on the given target and method.
	 *
	 * @param string $abstract
	 * @param mixed $target
	 * @param string $method
	 * @return mixed
	 * @static
	 */
	public static function refresh($abstract, $target, $method){
		//Method inherited from \Illuminate\Container\Container
		return \Illuminate\Foundation\Application::refresh($abstract, $target, $method);
	}

	/**
	 * Instantiate a concrete instance of the given type.
	 *
	 * @param string $concrete
	 * @param array $parameters
	 * @return mixed
	 * @throws BindingResolutionException
	 * @static
	 */
	public static function build($concrete, $parameters = array()){
		//Method inherited from \Illuminate\Container\Container
		return \Illuminate\Foundation\Application::build($concrete, $parameters);
	}

	/**
	 * Register a new resolving callback.
	 *
	 * @param string $abstract
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function resolving($abstract, $callback){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::resolving($abstract, $callback);
	}

	/**
	 * Register a new resolving callback for all types.
	 *
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function resolvingAny($callback){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::resolvingAny($callback);
	}

	/**
	 * Determine if a given type is shared.
	 *
	 * @param string $abstract
	 * @return bool
	 * @static
	 */
	public static function isShared($abstract){
		//Method inherited from \Illuminate\Container\Container
		return \Illuminate\Foundation\Application::isShared($abstract);
	}

	/**
	 * Get the container's bindings.
	 *
	 * @return array
	 * @static
	 */
	public static function getBindings(){
		//Method inherited from \Illuminate\Container\Container
		return \Illuminate\Foundation\Application::getBindings();
	}

	/**
	 * Remove a resolved instance from the instance cache.
	 *
	 * @param string $abstract
	 * @return void
	 * @static
	 */
	public static function forgetInstance($abstract){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::forgetInstance($abstract);
	}

	/**
	 * Clear all of the instances from the container.
	 *
	 * @return void
	 * @static
	 */
	public static function forgetInstances(){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::forgetInstances();
	}

	/**
	 * Determine if a given offset exists.
	 *
	 * @param string $key
	 * @return bool
	 * @static
	 */
	public static function offsetExists($key){
		//Method inherited from \Illuminate\Container\Container
		return \Illuminate\Foundation\Application::offsetExists($key);
	}

	/**
	 * Get the value at a given offset.
	 *
	 * @param string $key
	 * @return mixed
	 * @static
	 */
	public static function offsetGet($key){
		//Method inherited from \Illuminate\Container\Container
		return \Illuminate\Foundation\Application::offsetGet($key);
	}

	/**
	 * Set the value at a given offset.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 * @static
	 */
	public static function offsetSet($key, $value){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::offsetSet($key, $value);
	}

	/**
	 * Unset the value at a given offset.
	 *
	 * @param string $key
	 * @return void
	 * @static
	 */
	public static function offsetUnset($key){
		//Method inherited from \Illuminate\Container\Container
		\Illuminate\Foundation\Application::offsetUnset($key);
	}

}