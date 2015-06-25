<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 18:55
 */

class Artisan extends \Illuminate\Support\Facades\Artisan{

	/**
	 * Create and boot a new Console application.
	 *
	 * @param \Illuminate\Foundation\Application $app
	 * @return \Illuminate\Console\Application
	 * @static
	 */
	public static function start($app){
		return \Illuminate\Console\Application::start($app);
	}

	/**
	 * Create a new Console application.
	 *
	 * @param \Illuminate\Foundation\Application $app
	 * @return \Illuminate\Console\Application
	 * @static
	 */
	public static function make($app){
		return \Illuminate\Console\Application::make($app);
	}

	/**
	 * Boot the Console application.
	 *
	 * @return \Illuminate\Console\Application
	 * @static
	 */
	public static function boot(){
		return \Illuminate\Console\Application::boot();
	}

	/**
	 * Run an Artisan console command by name.
	 *
	 * @param string $command
	 * @param array $parameters
	 * @param \Symfony\Component\Console\Output\OutputInterface $output
	 * @return void
	 * @static
	 */
	public static function call($command, $parameters = array(), $output = null){
		\Illuminate\Console\Application::call($command, $parameters, $output);
	}

	/**
	 * Add a command to the console.
	 *
	 * @param \Symfony\Component\Console\Command\Command $command
	 * @return \Symfony\Component\Console\Command\Command
	 * @static
	 */
	public static function add($command){
		return \Illuminate\Console\Application::add($command);
	}

	/**
	 * Add a command, resolving through the application.
	 *
	 * @param string $command
	 * @return \Symfony\Component\Console\Command\Command
	 * @static
	 */
	public static function resolve($command){
		return \Illuminate\Console\Application::resolve($command);
	}

	/**
	 * Resolve an array of commands through the application.
	 *
	 * @param array|mixed $commands
	 * @return void
	 * @static
	 */
	public static function resolveCommands($commands){
		\Illuminate\Console\Application::resolveCommands($commands);
	}

	/**
	 * Render the given exception.
	 *
	 * @param \Exception $e
	 * @param \Symfony\Component\Console\Output\OutputInterface $output
	 * @return void
	 * @static
	 */
	public static function renderException($e, $output){
		\Illuminate\Console\Application::renderException($e, $output);
	}

	/**
	 * Set the exception handler instance.
	 *
	 * @param \Illuminate\Exception\Handler $handler
	 * @return \Illuminate\Console\Application
	 * @static
	 */
	public static function setExceptionHandler($handler){
		return \Illuminate\Console\Application::setExceptionHandler($handler);
	}

	/**
	 * Set the Laravel application instance.
	 *
	 * @param \Illuminate\Foundation\Application $laravel
	 * @return \Illuminate\Console\Application
	 * @static
	 */
	public static function setLaravel($laravel){
		return \Illuminate\Console\Application::setLaravel($laravel);
	}

	/**
	 * Set whether the Console app should auto-exit when done.
	 *
	 * @param bool $boolean
	 * @return \Illuminate\Console\Application
	 * @static
	 */
	public static function setAutoExit($boolean){
		return \Illuminate\Console\Application::setAutoExit($boolean);
	}

	/**
	 *
	 *
	 * @static
	 */
	public static function setDispatcher($dispatcher){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::setDispatcher($dispatcher);
	}

	/**
	 * Runs the current application.
	 *
	 * @param \Symfony\Component\Console\InputInterface $input An Input instance
	 * @param \Symfony\Component\Console\OutputInterface $output An Output instance
	 * @return int 0 if everything went fine, or an error code
	 * @throws \Exception When doRun returns Exception
	 * @api
	 * @static
	 */
	public static function run($input = null, $output = null){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::run($input, $output);
	}

	/**
	 * Runs the current application.
	 *
	 * @param \Symfony\Component\Console\InputInterface $input An Input instance
	 * @param \Symfony\Component\Console\OutputInterface $output An Output instance
	 * @return int 0 if everything went fine, or an error code
	 * @static
	 */
	public static function doRun($input, $output){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::doRun($input, $output);
	}

	/**
	 * Set a helper set to be used with the command.
	 *
	 * @param \Symfony\Component\Console\HelperSet $helperSet The helper set
	 * @api
	 * @static
	 */
	public static function setHelperSet($helperSet){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::setHelperSet($helperSet);
	}

	/**
	 * Get the helper set associated with the command.
	 *
	 * @return \Symfony\Component\Console\HelperSet The HelperSet instance associated with this command
	 * @api
	 * @static
	 */
	public static function getHelperSet(){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::getHelperSet();
	}

	/**
	 * Set an input definition set to be used with this application
	 *
	 * @param \Symfony\Component\Console\InputDefinition $definition The input definition
	 * @api
	 * @static
	 */
	public static function setDefinition($definition){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::setDefinition($definition);
	}

	/**
	 * Gets the InputDefinition related to this Application.
	 *
	 * @return \Symfony\Component\Console\InputDefinition The InputDefinition instance
	 * @static
	 */
	public static function getDefinition(){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::getDefinition();
	}

	/**
	 * Gets the help message.
	 *
	 * @return string A help message.
	 * @static
	 */
	public static function getHelp(){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::getHelp();
	}

	/**
	 * Sets whether to catch exceptions or not during commands execution.
	 *
	 * @param bool $boolean Whether to catch exceptions or not during commands execution
	 * @api
	 * @static
	 */
	public static function setCatchExceptions($boolean){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::setCatchExceptions($boolean);
	}

	/**
	 * Gets the name of the application.
	 *
	 * @return string The application name
	 * @api
	 * @static
	 */
	public static function getName(){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::getName();
	}

	/**
	 * Sets the application name.
	 *
	 * @param string $name The application name
	 * @api
	 * @static
	 */
	public static function setName($name){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::setName($name);
	}

	/**
	 * Gets the application version.
	 *
	 * @return string The application version
	 * @api
	 * @static
	 */
	public static function getVersion(){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::getVersion();
	}

	/**
	 * Sets the application version.
	 *
	 * @param string $version The application version
	 * @api
	 * @static
	 */
	public static function setVersion($version){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::setVersion($version);
	}

	/**
	 * Returns the long version of the application.
	 *
	 * @return string The long application version
	 * @api
	 * @static
	 */
	public static function getLongVersion(){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::getLongVersion();
	}

	/**
	 * Registers a new command.
	 *
	 * @param string $name The command name
	 * @return \Symfony\Component\Console\Command The newly created command
	 * @api
	 * @static
	 */
	public static function register($name){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::register($name);
	}

	/**
	 * Adds an array of command objects.
	 *
	 * @param \Symfony\Component\Console\Command[] $commands An array of commands
	 * @api
	 * @static
	 */
	public static function addCommands($commands){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::addCommands($commands);
	}

	/**
	 * Returns a registered command by name or alias.
	 *
	 * @param string $name The command name or alias
	 * @return \Symfony\Component\Console\Command A Command object
	 * @throws \InvalidArgumentException When command name given does not exist
	 * @api
	 * @static
	 */
	public static function get($name){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::get($name);
	}

	/**
	 * Returns true if the command exists, false otherwise.
	 *
	 * @param string $name The command name or alias
	 * @return bool true if the command exists, false otherwise
	 * @api
	 * @static
	 */
	public static function has($name){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::has($name);
	}

	/**
	 * Returns an array of all unique namespaces used by currently registered commands.
	 *
	 * It does not returns the global namespace which always exists.
	 *
	 * @return array An array of namespaces
	 * @static
	 */
	public static function getNamespaces(){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::getNamespaces();
	}

	/**
	 * Finds a registered namespace by a name or an abbreviation.
	 *
	 * @param string $namespace A namespace or abbreviation to search for
	 * @return string A registered namespace
	 * @throws \InvalidArgumentException When namespace is incorrect or ambiguous
	 * @static
	 */
	public static function findNamespace($namespace){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::findNamespace($namespace);
	}

	/**
	 * Finds a command by name or alias.
	 *
	 * Contrary to get, this command tries to find the best
	 * match if you give it an abbreviation of a name or alias.
	 *
	 * @param string $name A command name or a command alias
	 * @return \Symfony\Component\Console\Command A Command instance
	 * @throws \InvalidArgumentException When command name is incorrect or ambiguous
	 * @api
	 * @static
	 */
	public static function find($name){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::find($name);
	}

	/**
	 * Gets the commands (registered in the given namespace if provided).
	 *
	 * The array keys are the full names and the values the command instances.
	 *
	 * @param string $namespace A namespace name
	 * @return \Symfony\Component\Console\Command[] An array of Command instances
	 * @api
	 * @static
	 */
	public static function all($namespace = null){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::all($namespace);
	}

	/**
	 * Returns an array of possible abbreviations given a set of names.
	 *
	 * @param array $names An array of names
	 * @return array An array of abbreviations
	 * @static
	 */
	public static function getAbbreviations($names){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::getAbbreviations($names);
	}

	/**
	 * Returns a text representation of the Application.
	 *
	 * @param string $namespace An optional namespace name
	 * @param bool $raw Whether to return raw command list
	 * @return string A string representing the Application
	 * @deprecated Deprecated since version 2.3, to be removed in 3.0.
	 * @static
	 */
	public static function asText($namespace = null, $raw = false){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::asText($namespace, $raw);
	}

	/**
	 * Returns an XML representation of the Application.
	 *
	 * @param string $namespace An optional namespace name
	 * @param bool $asDom Whether to return a DOM or an XML string
	 * @return string|\DOMDocument An XML string representing the Application
	 * @deprecated Deprecated since version 2.3, to be removed in 3.0.
	 * @static
	 */
	public static function asXml($namespace = null, $asDom = false){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::asXml($namespace, $asDom);
	}

	/**
	 * Tries to figure out the terminal dimensions based on the current environment
	 *
	 * @return array Array containing width and height
	 * @static
	 */
	public static function getTerminalDimensions(){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::getTerminalDimensions();
	}

	/**
	 * Sets terminal dimensions.
	 *
	 * Can be useful to force terminal dimensions for functional tests.
	 *
	 * @param int $width The width
	 * @param int $height The height
	 * @return \Symfony\Component\Console\Application The current application
	 * @static
	 */
	public static function setTerminalDimensions($width, $height){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::setTerminalDimensions($width, $height);
	}

	/**
	 * Returns the namespace part of the command name.
	 *
	 * This method is not part of public API and should not be used directly.
	 *
	 * @param string $name The full name of the command
	 * @param string $limit The maximum number of parts of the namespace
	 * @return string The namespace of the command
	 * @static
	 */
	public static function extractNamespace($name, $limit = null){
		//Method inherited from \Symfony\Component\Console\Application
		return \Illuminate\Console\Application::extractNamespace($name, $limit);
	}

}