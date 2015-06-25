<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:00
 */

class Eloquent extends \Illuminate\Database\Eloquent\Model{

	/**
	 * Find a model by its primary key.
	 *
	 * @param array $id
	 * @param array $columns
	 * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static
	 * @static
	 */
	public static function findMany($id, $columns = array()){
		return \Illuminate\Database\Eloquent\Builder::findMany($id, $columns);
	}

	/**
	 * Execute the query and get the first result.
	 *
	 * @param array $columns
	 * @return \Illuminate\Database\Eloquent\Model|static|null
	 * @static
	 */
	public static function first($columns = array()){
		return \Illuminate\Database\Eloquent\Builder::first($columns);
	}

	/**
	 * Execute the query and get the first result or throw an exception.
	 *
	 * @param array $columns
	 * @return \Illuminate\Database\Eloquent\Model|static
	 * @throws ModelNotFoundException
	 * @static
	 */
	public static function firstOrFail($columns = array()){
		return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
	}

	/**
	 * Execute the query as a "select" statement.
	 *
	 * @param array $columns
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 * @static
	 */
	public static function get($columns = array()){
		return \Illuminate\Database\Eloquent\Builder::get($columns);
	}

	/**
	 * Pluck a single column from the database.
	 *
	 * @param string $column
	 * @return mixed
	 * @static
	 */
	public static function pluck($column){
		return \Illuminate\Database\Eloquent\Builder::pluck($column);
	}

	/**
	 * Chunk the results of the query.
	 *
	 * @param int $count
	 * @param callable $callback
	 * @return void
	 * @static
	 */
	public static function chunk($count, $callback){
		\Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
	}

	/**
	 * Get an array with the values of a given column.
	 *
	 * @param string $column
	 * @param string $key
	 * @return array
	 * @static
	 */
	public static function lists($column, $key = null){
		return \Illuminate\Database\Eloquent\Builder::lists($column, $key);
	}

	/**
	 * Get a paginator for the "select" statement.
	 *
	 * @param int $perPage
	 * @param array $columns
	 * @return \Illuminate\Pagination\Paginator
	 * @static
	 */
	public static function paginate($perPage = null, $columns = array()){
		return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns);
	}

	/**
	 * Get the hydrated models without eager loading.
	 *
	 * @param array $columns
	 * @return array|static[]
	 * @static
	 */
	public static function getModels($columns = array()){
		return \Illuminate\Database\Eloquent\Builder::getModels($columns);
	}

	/**
	 * Eager load the relationships for the models.
	 *
	 * @param array $models
	 * @return array
	 * @static
	 */
	public static function eagerLoadRelations($models){
		return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
	}

	/**
	 * Add a basic where clause to the query.
	 *
	 * @param string $column
	 * @param string $operator
	 * @param mixed $value
	 * @param string $boolean
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static
	 */
	public static function where($column, $operator = null, $value = null, $boolean = 'and'){
		return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
	}

	/**
	 * Add an "or where" clause to the query.
	 *
	 * @param string $column
	 * @param string $operator
	 * @param mixed $value
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static
	 */
	public static function orWhere($column, $operator = null, $value = null){
		return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
	}

	/**
	 * Add a relationship count condition to the query.
	 *
	 * @param string $relation
	 * @param string $operator
	 * @param int $count
	 * @param string $boolean
	 * @param \Closure $callback
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static
	 */
	public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null){
		return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
	}

	/**
	 * Add a relationship count condition to the query with where clauses.
	 *
	 * @param string $relation
	 * @param \Closure $callback
	 * @param string $operator
	 * @param int $count
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static
	 */
	public static function whereHas($relation, $callback, $operator = '>=', $count = 1){
		return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
	}

	/**
	 * Add a relationship count condition to the query with an "or".
	 *
	 * @param string $relation
	 * @param string $operator
	 * @param int $count
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static
	 */
	public static function orHas($relation, $operator = '>=', $count = 1){
		return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
	}

	/**
	 * Add a relationship count condition to the query with where clauses and an "or".
	 *
	 * @param string $relation
	 * @param \Closure $callback
	 * @param string $operator
	 * @param int $count
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static
	 */
	public static function orWhereHas($relation, $callback, $operator = '>=', $count = 1){
		return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
	}

	/**
	 * Get the underlying query builder instance.
	 *
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function getQuery(){
		return \Illuminate\Database\Eloquent\Builder::getQuery();
	}

	/**
	 * Set the underlying query builder instance.
	 *
	 * @param \Illuminate\Database\Query\Builder $query
	 * @return void
	 * @static
	 */
	public static function setQuery($query){
		\Illuminate\Database\Eloquent\Builder::setQuery($query);
	}

	/**
	 * Get the relationships being eagerly loaded.
	 *
	 * @return array
	 * @static
	 */
	public static function getEagerLoads(){
		return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
	}

	/**
	 * Set the relationships being eagerly loaded.
	 *
	 * @param array $eagerLoad
	 * @return void
	 * @static
	 */
	public static function setEagerLoads($eagerLoad){
		\Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
	}

	/**
	 * Get the model instance being queried.
	 *
	 * @return \Illuminate\Database\Eloquent\Model
	 * @static
	 */
	public static function getModel(){
		return \Illuminate\Database\Eloquent\Builder::getModel();
	}

	/**
	 * Set a model instance for the model being queried.
	 *
	 * @param \Illuminate\Database\Eloquent\Model $model
	 * @return \Illuminate\Database\Eloquent\Builder
	 * @static
	 */
	public static function setModel($model){
		return \Illuminate\Database\Eloquent\Builder::setModel($model);
	}

	/**
	 * Set the columns to be selected.
	 *
	 * @param array $columns
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function select($columns = array()){
		return \Illuminate\Database\Query\Builder::select($columns);
	}

	/**
	 * Add a new "raw" select expression to the query.
	 *
	 * @param string $expression
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function selectRaw($expression){
		return \Illuminate\Database\Query\Builder::selectRaw($expression);
	}

	/**
	 * Add a new select column to the query.
	 *
	 * @param mixed $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function addSelect($column){
		return \Illuminate\Database\Query\Builder::addSelect($column);
	}

	/**
	 * Force the query to only return distinct results.
	 *
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function distinct(){
		return \Illuminate\Database\Query\Builder::distinct();
	}

	/**
	 * Set the table which the query is targeting.
	 *
	 * @param string $table
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function from($table){
		return \Illuminate\Database\Query\Builder::from($table);
	}

	/**
	 * Add a join clause to the query.
	 *
	 * @param string $table
	 * @param string $first
	 * @param string $operator
	 * @param string $two
	 * @param string $type
	 * @param bool $where
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function join($table, $one, $operator = null, $two = null, $type = 'inner', $where = false){
		return \Illuminate\Database\Query\Builder::join($table, $one, $operator, $two, $type, $where);
	}

	/**
	 * Add a "join where" clause to the query.
	 *
	 * @param string $table
	 * @param string $first
	 * @param string $operator
	 * @param string $two
	 * @param string $type
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function joinWhere($table, $one, $operator, $two, $type = 'inner'){
		return \Illuminate\Database\Query\Builder::joinWhere($table, $one, $operator, $two, $type);
	}

	/**
	 * Add a left join to the query.
	 *
	 * @param string $table
	 * @param string $first
	 * @param string $operator
	 * @param string $second
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function leftJoin($table, $first, $operator = null, $second = null){
		return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
	}

	/**
	 * Add a "join where" clause to the query.
	 *
	 * @param string $table
	 * @param string $first
	 * @param string $operator
	 * @param string $two
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function leftJoinWhere($table, $one, $operator, $two){
		return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $one, $operator, $two);
	}

	/**
	 * Add a raw where clause to the query.
	 *
	 * @param string $sql
	 * @param array $bindings
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
	}

	/**
	 * Add a raw or where clause to the query.
	 *
	 * @param string $sql
	 * @param array $bindings
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orWhereRaw($sql, $bindings = array()){
		return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
	}

	/**
	 * Add a where between statement to the query.
	 *
	 * @param string $column
	 * @param array $values
	 * @param string $boolean
	 * @param bool $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereBetween($column, $values, $boolean = 'and', $not = false){
		return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
	}

	/**
	 * Add an or where between statement to the query.
	 *
	 * @param string $column
	 * @param array $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orWhereBetween($column, $values){
		return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
	}

	/**
	 * Add a where not between statement to the query.
	 *
	 * @param string $column
	 * @param array $values
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereNotBetween($column, $values, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
	}

	/**
	 * Add an or where not between statement to the query.
	 *
	 * @param string $column
	 * @param array $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orWhereNotBetween($column, $values){
		return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
	}

	/**
	 * Add a nested where statement to the query.
	 *
	 * @param \Closure $callback
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereNested($callback, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
	}

	/**
	 * Add another query builder as a nested where to the query builder.
	 *
	 * @param \Illuminate\Database\Query\Builder|static $query
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function addNestedWhereQuery($query, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
	}

	/**
	 * Add an exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param string $boolean
	 * @param bool $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereExists($callback, $boolean = 'and', $not = false){
		return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
	}

	/**
	 * Add an or exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param bool $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orWhereExists($callback, $not = false){
		return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
	}

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereNotExists($callback, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
	}

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orWhereNotExists($callback){
		return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
	}

	/**
	 * Add a "where in" clause to the query.
	 *
	 * @param string $column
	 * @param mixed $values
	 * @param string $boolean
	 * @param bool $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereIn($column, $values, $boolean = 'and', $not = false){
		return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
	}

	/**
	 * Add an "or where in" clause to the query.
	 *
	 * @param string $column
	 * @param mixed $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orWhereIn($column, $values){
		return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
	}

	/**
	 * Add a "where not in" clause to the query.
	 *
	 * @param string $column
	 * @param mixed $values
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereNotIn($column, $values, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
	}

	/**
	 * Add an "or where not in" clause to the query.
	 *
	 * @param string $column
	 * @param mixed $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orWhereNotIn($column, $values){
		return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
	}

	/**
	 * Add a "where null" clause to the query.
	 *
	 * @param string $column
	 * @param string $boolean
	 * @param bool $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereNull($column, $boolean = 'and', $not = false){
		return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
	}

	/**
	 * Add an "or where null" clause to the query.
	 *
	 * @param string $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orWhereNull($column){
		return \Illuminate\Database\Query\Builder::orWhereNull($column);
	}

	/**
	 * Add a "where not null" clause to the query.
	 *
	 * @param string $column
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereNotNull($column, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
	}

	/**
	 * Add an "or where not null" clause to the query.
	 *
	 * @param string $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orWhereNotNull($column){
		return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
	}

	/**
	 * Add a "where day" statement to the query.
	 *
	 * @param string $column
	 * @param string $operator
	 * @param int $value
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereDay($column, $operator, $value, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
	}

	/**
	 * Add a "where month" statement to the query.
	 *
	 * @param string $column
	 * @param string $operator
	 * @param int $value
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereMonth($column, $operator, $value, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
	}

	/**
	 * Add a "where year" statement to the query.
	 *
	 * @param string $column
	 * @param string $operator
	 * @param int $value
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function whereYear($column, $operator, $value, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
	}

	/**
	 * Handles dynamic "where" clauses to the query.
	 *
	 * @param string $method
	 * @param string $parameters
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function dynamicWhere($method, $parameters){
		return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
	}

	/**
	 * Add a "group by" clause to the query.
	 *
	 * @param mixed $columns
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function groupBy(){
		return \Illuminate\Database\Query\Builder::groupBy();
	}

	/**
	 * Add a "having" clause to the query.
	 *
	 * @param string $column
	 * @param string $operator
	 * @param string $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function having($column, $operator = null, $value = null){
		return \Illuminate\Database\Query\Builder::having($column, $operator, $value);
	}

	/**
	 * Add a raw having clause to the query.
	 *
	 * @param string $sql
	 * @param array $bindings
	 * @param string $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
	}

	/**
	 * Add a raw or having clause to the query.
	 *
	 * @param string $sql
	 * @param array $bindings
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orHavingRaw($sql, $bindings = array()){
		return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
	}

	/**
	 * Add an "order by" clause to the query.
	 *
	 * @param string $column
	 * @param string $direction
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orderBy($column, $direction = 'asc'){
		return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
	}

	/**
	 * Add an "order by" clause for a timestamp to the query.
	 *
	 * @param string $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function latest($column = 'created_at'){
		return \Illuminate\Database\Query\Builder::latest($column);
	}

	/**
	 * Add an "order by" clause for a timestamp to the query.
	 *
	 * @param string $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function oldest($column = 'created_at'){
		return \Illuminate\Database\Query\Builder::oldest($column);
	}

	/**
	 * Add a raw "order by" clause to the query.
	 *
	 * @param string $sql
	 * @param array $bindings
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function orderByRaw($sql, $bindings = array()){
		return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
	}

	/**
	 * Set the "offset" value of the query.
	 *
	 * @param int $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function offset($value){
		return \Illuminate\Database\Query\Builder::offset($value);
	}

	/**
	 * Alias to set the "offset" value of the query.
	 *
	 * @param int $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function skip($value){
		return \Illuminate\Database\Query\Builder::skip($value);
	}

	/**
	 * Set the "limit" value of the query.
	 *
	 * @param int $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function limit($value){
		return \Illuminate\Database\Query\Builder::limit($value);
	}

	/**
	 * Alias to set the "limit" value of the query.
	 *
	 * @param int $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function take($value){
		return \Illuminate\Database\Query\Builder::take($value);
	}

	/**
	 * Set the limit and offset for a given page.
	 *
	 * @param int $page
	 * @param int $perPage
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function forPage($page, $perPage = 15){
		return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
	}

	/**
	 * Add a union statement to the query.
	 *
	 * @param \Illuminate\Database\Query\Builder|\Closure $query
	 * @param bool $all
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function union($query, $all = false){
		return \Illuminate\Database\Query\Builder::union($query, $all);
	}

	/**
	 * Add a union all statement to the query.
	 *
	 * @param \Illuminate\Database\Query\Builder|\Closure $query
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function unionAll($query){
		return \Illuminate\Database\Query\Builder::unionAll($query);
	}

	/**
	 * Lock the selected rows in the table.
	 *
	 * @param bool $update
	 * @return \Illuminate\Database\Query\Builder
	 * @static
	 */
	public static function lock($value = true){
		return \Illuminate\Database\Query\Builder::lock($value);
	}

	/**
	 * Lock the selected rows in the table for updating.
	 *
	 * @return \Illuminate\Database\Query\Builder
	 * @static
	 */
	public static function lockForUpdate(){
		return \Illuminate\Database\Query\Builder::lockForUpdate();
	}

	/**
	 * Share lock the selected rows in the table.
	 *
	 * @return \Illuminate\Database\Query\Builder
	 * @static
	 */
	public static function sharedLock(){
		return \Illuminate\Database\Query\Builder::sharedLock();
	}

	/**
	 * Get the SQL representation of the query.
	 *
	 * @return string
	 * @static
	 */
	public static function toSql(){
		return \Illuminate\Database\Query\Builder::toSql();
	}

	/**
	 * Indicate that the query results should be cached.
	 *
	 * @param \DateTime|int $minutes
	 * @param string $key
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function remember($minutes, $key = null){
		return \Illuminate\Database\Query\Builder::remember($minutes, $key);
	}

	/**
	 * Indicate that the query results should be cached forever.
	 *
	 * @param string $key
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function rememberForever($key = null){
		return \Illuminate\Database\Query\Builder::rememberForever($key);
	}

	/**
	 * Indicate that the results, if cached, should use the given cache tags.
	 *
	 * @param array|mixed $cacheTags
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function cacheTags($cacheTags){
		return \Illuminate\Database\Query\Builder::cacheTags($cacheTags);
	}

	/**
	 * Indicate that the results, if cached, should use the given cache driver.
	 *
	 * @param string $cacheDriver
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static
	 */
	public static function cacheDriver($cacheDriver){
		return \Illuminate\Database\Query\Builder::cacheDriver($cacheDriver);
	}

	/**
	 * Execute the query as a fresh "select" statement.
	 *
	 * @param array $columns
	 * @return array|static[]
	 * @static
	 */
	public static function getFresh($columns = array()){
		return \Illuminate\Database\Query\Builder::getFresh($columns);
	}

	/**
	 * Execute the query as a cached "select" statement.
	 *
	 * @param array $columns
	 * @return array
	 * @static
	 */
	public static function getCached($columns = array()){
		return \Illuminate\Database\Query\Builder::getCached($columns);
	}

	/**
	 * Get a unique cache key for the complete query.
	 *
	 * @return string
	 * @static
	 */
	public static function getCacheKey(){
		return \Illuminate\Database\Query\Builder::getCacheKey();
	}

	/**
	 * Generate the unique cache key for the query.
	 *
	 * @return string
	 * @static
	 */
	public static function generateCacheKey(){
		return \Illuminate\Database\Query\Builder::generateCacheKey();
	}

	/**
	 * Concatenate values of a given column as a string.
	 *
	 * @param string $column
	 * @param string $glue
	 * @return string
	 * @static
	 */
	public static function implode($column, $glue = null){
		return \Illuminate\Database\Query\Builder::implode($column, $glue);
	}

	/**
	 * Build a paginator instance from a raw result array.
	 *
	 * @param \Illuminate\Pagination\Environment $paginator
	 * @param array $results
	 * @param int $perPage
	 * @return \Illuminate\Pagination\Paginator
	 * @static
	 */
	public static function buildRawPaginator($paginator, $results, $perPage){
		return \Illuminate\Database\Query\Builder::buildRawPaginator($paginator, $results, $perPage);
	}

	/**
	 * Get the count of the total records for pagination.
	 *
	 * @return int
	 * @static
	 */
	public static function getPaginationCount(){
		return \Illuminate\Database\Query\Builder::getPaginationCount();
	}

	/**
	 * Determine if any rows exist for the current query.
	 *
	 * @return bool
	 * @static
	 */
	public static function exists(){
		return \Illuminate\Database\Query\Builder::exists();
	}

	/**
	 * Retrieve the "count" result of the query.
	 *
	 * @param string $columns
	 * @return int
	 * @static
	 */
	public static function count($columns = '*'){
		return \Illuminate\Database\Query\Builder::count($columns);
	}

	/**
	 * Retrieve the minimum value of a given column.
	 *
	 * @param string $column
	 * @return mixed
	 * @static
	 */
	public static function min($column){
		return \Illuminate\Database\Query\Builder::min($column);
	}

	/**
	 * Retrieve the maximum value of a given column.
	 *
	 * @param string $column
	 * @return mixed
	 * @static
	 */
	public static function max($column){
		return \Illuminate\Database\Query\Builder::max($column);
	}

	/**
	 * Retrieve the sum of the values of a given column.
	 *
	 * @param string $column
	 * @return mixed
	 * @static
	 */
	public static function sum($column){
		return \Illuminate\Database\Query\Builder::sum($column);
	}

	/**
	 * Retrieve the average of the values of a given column.
	 *
	 * @param string $column
	 * @return mixed
	 * @static
	 */
	public static function avg($column){
		return \Illuminate\Database\Query\Builder::avg($column);
	}

	/**
	 * Execute an aggregate function on the database.
	 *
	 * @param string $function
	 * @param array $columns
	 * @return mixed
	 * @static
	 */
	public static function aggregate($function, $columns = array()){
		return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
	}

	/**
	 * Insert a new record into the database.
	 *
	 * @param array $values
	 * @return bool
	 * @static
	 */
	public static function insert($values){
		return \Illuminate\Database\Query\Builder::insert($values);
	}

	/**
	 * Insert a new record and get the value of the primary key.
	 *
	 * @param array $values
	 * @param string $sequence
	 * @return int
	 * @static
	 */
	public static function insertGetId($values, $sequence = null){
		return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
	}

	/**
	 * Run a truncate statement on the table.
	 *
	 * @return void
	 * @static
	 */
	public static function truncate(){
		\Illuminate\Database\Query\Builder::truncate();
	}

	/**
	 * Merge an array of where clauses and bindings.
	 *
	 * @param array $wheres
	 * @param array $bindings
	 * @return void
	 * @static
	 */
	public static function mergeWheres($wheres, $bindings){
		\Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
	}

	/**
	 * Create a raw database expression.
	 *
	 * @param mixed $value
	 * @return \Illuminate\Database\Query\Expression
	 * @static
	 */
	public static function raw($value){
		return \Illuminate\Database\Query\Builder::raw($value);
	}

	/**
	 * Get the current query value bindings.
	 *
	 * @return array
	 * @static
	 */
	public static function getBindings(){
		return \Illuminate\Database\Query\Builder::getBindings();
	}

	/**
	 * Set the bindings on the query builder.
	 *
	 * @param array $bindings
	 * @return \Illuminate\Database\Query\Builder
	 * @static
	 */
	public static function setBindings($bindings){
		return \Illuminate\Database\Query\Builder::setBindings($bindings);
	}

	/**
	 * Add a binding to the query.
	 *
	 * @param mixed $value
	 * @return \Illuminate\Database\Query\Builder
	 * @static
	 */
	public static function addBinding($value){
		return \Illuminate\Database\Query\Builder::addBinding($value);
	}

	/**
	 * Merge an array of bindings into our bindings.
	 *
	 * @param \Illuminate\Database\Query\Builder $query
	 * @return \Illuminate\Database\Query\Builder
	 * @static
	 */
	public static function mergeBindings($query){
		return \Illuminate\Database\Query\Builder::mergeBindings($query);
	}

	/**
	 * Get the database query processor instance.
	 *
	 * @return \Illuminate\Database\Query\Processors\Processor
	 * @static
	 */
	public static function getProcessor(){
		return \Illuminate\Database\Query\Builder::getProcessor();
	}

	/**
	 * Get the query grammar instance.
	 *
	 * @return \Illuminate\Database\Grammar
	 * @static
	 */
	public static function getGrammar(){
		return \Illuminate\Database\Query\Builder::getGrammar();
	}

}