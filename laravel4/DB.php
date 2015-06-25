<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 18:58
 */

class DB extends \Illuminate\Support\Facades\DB{

	/**
	 * Get a database connection instance.
	 *
	 * @param string $name
	 * @return \Illuminate\Database\Connection
	 * @static
	 */
	public static function connection($name = null){
		return \Illuminate\Database\DatabaseManager::connection($name);
	}

	/**
	 * Reconnect to the given database.
	 *
	 * @param string $name
	 * @return \Illuminate\Database\Connection
	 * @static
	 */
	public static function reconnect($name = null){
		return \Illuminate\Database\DatabaseManager::reconnect($name);
	}

	/**
	 * Disconnect from the given database.
	 *
	 * @param string $name
	 * @return void
	 * @static
	 */
	public static function disconnect($name = null){
		\Illuminate\Database\DatabaseManager::disconnect($name);
	}

	/**
	 * Get the default connection name.
	 *
	 * @return string
	 * @static
	 */
	public static function getDefaultConnection(){
		return \Illuminate\Database\DatabaseManager::getDefaultConnection();
	}

	/**
	 * Set the default connection name.
	 *
	 * @param string $name
	 * @return void
	 * @static
	 */
	public static function setDefaultConnection($name){
		\Illuminate\Database\DatabaseManager::setDefaultConnection($name);
	}

	/**
	 * Register an extension connection resolver.
	 *
	 * @param string $name
	 * @param callable $resolver
	 * @return void
	 * @static
	 */
	public static function extend($name, $resolver){
		\Illuminate\Database\DatabaseManager::extend($name, $resolver);
	}

	/**
	 * Return all of the created connections.
	 *
	 * @return array
	 * @static
	 */
	public static function getConnections(){
		return \Illuminate\Database\DatabaseManager::getConnections();
	}

	/**
	 * Get a schema builder instance for the connection.
	 *
	 * @return \Illuminate\Database\Schema\MySqlBuilder
	 * @static
	 */
	public static function getSchemaBuilder(){
		return \Illuminate\Database\MySqlConnection::getSchemaBuilder();
	}

	/**
	 * Set the query grammar to the default implementation.
	 *
	 * @return void
	 * @static
	 */
	public static function useDefaultQueryGrammar(){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
	}

	/**
	 * Set the schema grammar to the default implementation.
	 *
	 * @return void
	 * @static
	 */
	public static function useDefaultSchemaGrammar(){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
	}

	/**
	 * Set the query post processor to the default implementation.
	 *
	 * @return void
	 * @static
	 */
	public static function useDefaultPostProcessor(){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
	}

	/**
	 * Begin a fluent query against a database table.
	 *
	 * @param string $table
	 * @return \Illuminate\Database\Query\Builder
	 * @static
	 */
	public static function table($table){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::table($table);
	}

	/**
	 * Get a new raw query expression.
	 *
	 * @param mixed $value
	 * @return \Illuminate\Database\Query\Expression
	 * @static
	 */
	public static function raw($value){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::raw($value);
	}

	/**
	 * Run a select statement and return a single result.
	 *
	 * @param string $query
	 * @param array $bindings
	 * @return mixed
	 * @static
	 */
	public static function selectOne($query, $bindings = array()){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::selectOne($query, $bindings);
	}

	/**
	 * Run a select statement against the database.
	 *
	 * @param string $query
	 * @param array $bindings
	 * @return array
	 * @static
	 */
	public static function select($query, $bindings = array()){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::select($query, $bindings);
	}

	/**
	 * Run an insert statement against the database.
	 *
	 * @param string $query
	 * @param array $bindings
	 * @return bool
	 * @static
	 */
	public static function insert($query, $bindings = array()){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::insert($query, $bindings);
	}

	/**
	 * Run an update statement against the database.
	 *
	 * @param string $query
	 * @param array $bindings
	 * @return int
	 * @static
	 */
	public static function update($query, $bindings = array()){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::update($query, $bindings);
	}

	/**
	 * Run a delete statement against the database.
	 *
	 * @param string $query
	 * @param array $bindings
	 * @return int
	 * @static
	 */
	public static function delete($query, $bindings = array()){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::delete($query, $bindings);
	}

	/**
	 * Execute an SQL statement and return the boolean result.
	 *
	 * @param string $query
	 * @param array $bindings
	 * @return bool
	 * @static
	 */
	public static function statement($query, $bindings = array()){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::statement($query, $bindings);
	}

	/**
	 * Run an SQL statement and get the number of rows affected.
	 *
	 * @param string $query
	 * @param array $bindings
	 * @return int
	 * @static
	 */
	public static function affectingStatement($query, $bindings = array()){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
	}

	/**
	 * Run a raw, unprepared query against the PDO connection.
	 *
	 * @param string $query
	 * @return bool
	 * @static
	 */
	public static function unprepared($query){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::unprepared($query);
	}

	/**
	 * Prepare the query bindings for execution.
	 *
	 * @param array $bindings
	 * @return array
	 * @static
	 */
	public static function prepareBindings($bindings){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::prepareBindings($bindings);
	}

	/**
	 * Execute a Closure within a transaction.
	 *
	 * @param \Closure $callback
	 * @return mixed
	 * @throws \Exception
	 * @static
	 */
	public static function transaction($callback){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::transaction($callback);
	}

	/**
	 * Start a new database transaction.
	 *
	 * @return void
	 * @static
	 */
	public static function beginTransaction(){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::beginTransaction();
	}

	/**
	 * Commit the active database transaction.
	 *
	 * @return void
	 * @static
	 */
	public static function commit(){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::commit();
	}

	/**
	 * Rollback the active database transaction.
	 *
	 * @return void
	 * @static
	 */
	public static function rollBack(){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::rollBack();
	}

	/**
	 * Get the number of active transactions.
	 *
	 * @return int
	 * @static
	 */
	public static function transactionLevel(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::transactionLevel();
	}

	/**
	 * Execute the given callback in "dry run" mode.
	 *
	 * @param \Closure $callback
	 * @return array
	 * @static
	 */
	public static function pretend($callback){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::pretend($callback);
	}

	/**
	 * Log a query in the connection's query log.
	 *
	 * @param string $query
	 * @param array $bindings
	 * @param $time
	 * @return void
	 * @static
	 */
	public static function logQuery($query, $bindings, $time = null){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
	}

	/**
	 * Register a database query listener with the connection.
	 *
	 * @param \Closure $callback
	 * @return void
	 * @static
	 */
	public static function listen($callback){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::listen($callback);
	}

	/**
	 * Get a Doctrine Schema Column instance.
	 *
	 * @param string $table
	 * @param string $column
	 * @return \Doctrine\DBAL\Schema\Column
	 * @static
	 */
	public static function getDoctrineColumn($table, $column){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
	}

	/**
	 * Get the Doctrine DBAL schema manager for the connection.
	 *
	 * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
	 * @static
	 */
	public static function getDoctrineSchemaManager(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
	}

	/**
	 * Get the Doctrine DBAL database connection instance.
	 *
	 * @return \Doctrine\DBAL\Connection
	 * @static
	 */
	public static function getDoctrineConnection(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getDoctrineConnection();
	}

	/**
	 * Get the current PDO connection.
	 *
	 * @return \Illuminate\Database\PDO
	 * @static
	 */
	public static function getPdo(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getPdo();
	}

	/**
	 * Get the current PDO connection used for reading.
	 *
	 * @return \Illuminate\Database\PDO
	 * @static
	 */
	public static function getReadPdo(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getReadPdo();
	}

	/**
	 * Set the PDO connection.
	 *
	 * @param \Illuminate\Database\PDO $pdo
	 * @return \Illuminate\Database\Connection
	 * @static
	 */
	public static function setPdo($pdo){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::setPdo($pdo);
	}

	/**
	 * Set the PDO connection used for reading.
	 *
	 * @param \Illuminate\Database\PDO $pdo
	 * @return \Illuminate\Database\Connection
	 * @static
	 */
	public static function setReadPdo($pdo){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::setReadPdo($pdo);
	}

	/**
	 * Get the database connection name.
	 *
	 * @return string|null
	 * @static
	 */
	public static function getName(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getName();
	}

	/**
	 * Get an option from the configuration options.
	 *
	 * @param string $option
	 * @return mixed
	 * @static
	 */
	public static function getConfig($option){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getConfig($option);
	}

	/**
	 * Get the PDO driver name.
	 *
	 * @return string
	 * @static
	 */
	public static function getDriverName(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getDriverName();
	}

	/**
	 * Get the query grammar used by the connection.
	 *
	 * @return \Illuminate\Database\Query\Grammars\Grammar
	 * @static
	 */
	public static function getQueryGrammar(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getQueryGrammar();
	}

	/**
	 * Set the query grammar used by the connection.
	 *
	 * @param \Illuminate\Database\Query\Grammars\Grammar
	 * @return void
	 * @static
	 */
	public static function setQueryGrammar($grammar){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
	}

	/**
	 * Get the schema grammar used by the connection.
	 *
	 * @return \Illuminate\Database\Query\Grammars\Grammar
	 * @static
	 */
	public static function getSchemaGrammar(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getSchemaGrammar();
	}

	/**
	 * Set the schema grammar used by the connection.
	 *
	 * @param \Illuminate\Database\Schema\Grammars\Grammar
	 * @return void
	 * @static
	 */
	public static function setSchemaGrammar($grammar){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
	}

	/**
	 * Get the query post processor used by the connection.
	 *
	 * @return \Illuminate\Database\Query\Processors\Processor
	 * @static
	 */
	public static function getPostProcessor(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getPostProcessor();
	}

	/**
	 * Set the query post processor used by the connection.
	 *
	 * @param \Illuminate\Database\Query\Processors\Processor
	 * @return void
	 * @static
	 */
	public static function setPostProcessor($processor){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::setPostProcessor($processor);
	}

	/**
	 * Get the event dispatcher used by the connection.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static
	 */
	public static function getEventDispatcher(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getEventDispatcher();
	}

	/**
	 * Set the event dispatcher instance on the connection.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @return void
	 * @static
	 */
	public static function setEventDispatcher($events){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::setEventDispatcher($events);
	}

	/**
	 * Get the paginator environment instance.
	 *
	 * @return \Illuminate\Pagination\Environment
	 * @static
	 */
	public static function getPaginator(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getPaginator();
	}

	/**
	 * Set the pagination environment instance.
	 *
	 * @param \Illuminate\Pagination\Environment|\Closure $paginator
	 * @return void
	 * @static
	 */
	public static function setPaginator($paginator){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::setPaginator($paginator);
	}

	/**
	 * Get the cache manager instance.
	 *
	 * @return \Illuminate\Cache\CacheManager
	 * @static
	 */
	public static function getCacheManager(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getCacheManager();
	}

	/**
	 * Set the cache manager instance on the connection.
	 *
	 * @param \Illuminate\Cache\CacheManager|\Closure $cache
	 * @return void
	 * @static
	 */
	public static function setCacheManager($cache){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::setCacheManager($cache);
	}

	/**
	 * Determine if the connection in a "dry run".
	 *
	 * @return bool
	 * @static
	 */
	public static function pretending(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::pretending();
	}

	/**
	 * Get the default fetch mode for the connection.
	 *
	 * @return int
	 * @static
	 */
	public static function getFetchMode(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getFetchMode();
	}

	/**
	 * Set the default fetch mode for the connection.
	 *
	 * @param int $fetchMode
	 * @return int
	 * @static
	 */
	public static function setFetchMode($fetchMode){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::setFetchMode($fetchMode);
	}

	/**
	 * Get the connection query log.
	 *
	 * @return array
	 * @static
	 */
	public static function getQueryLog(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getQueryLog();
	}

	/**
	 * Clear the query log.
	 *
	 * @return void
	 * @static
	 */
	public static function flushQueryLog(){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::flushQueryLog();
	}

	/**
	 * Enable the query log on the connection.
	 *
	 * @return void
	 * @static
	 */
	public static function enableQueryLog(){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::enableQueryLog();
	}

	/**
	 * Disable the query log on the connection.
	 *
	 * @return void
	 * @static
	 */
	public static function disableQueryLog(){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::disableQueryLog();
	}

	/**
	 * Determine whether we're logging queries.
	 *
	 * @return bool
	 * @static
	 */
	public static function logging(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::logging();
	}

	/**
	 * Get the name of the connected database.
	 *
	 * @return string
	 * @static
	 */
	public static function getDatabaseName(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getDatabaseName();
	}

	/**
	 * Set the name of the connected database.
	 *
	 * @param string $database
	 * @return string
	 * @static
	 */
	public static function setDatabaseName($database){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::setDatabaseName($database);
	}

	/**
	 * Get the table prefix for the connection.
	 *
	 * @return string
	 * @static
	 */
	public static function getTablePrefix(){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::getTablePrefix();
	}

	/**
	 * Set the table prefix in use by the connection.
	 *
	 * @param string $prefix
	 * @return void
	 * @static
	 */
	public static function setTablePrefix($prefix){
		//Method inherited from \Illuminate\Database\Connection
		\Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
	}

	/**
	 * Set the table prefix and return the grammar.
	 *
	 * @param \Illuminate\Database\Grammar $grammar
	 * @return \Illuminate\Database\Grammar
	 * @static
	 */
	public static function withTablePrefix($grammar){
		//Method inherited from \Illuminate\Database\Connection
		return \Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
	}

}