<?php
/**
 * @author vision.shi@yunzhihui.com
 * Date: 2015-06-25 19:22
 */

class Paginator extends \Illuminate\Support\Facades\Paginator{

	/**
	 * Get a new paginator instance.
	 *
	 * @param array $items
	 * @param int $total
	 * @param int $perPage
	 * @return \Illuminate\Pagination\Paginator
	 * @static
	 */
	public static function make($items, $total, $perPage){
		return \Illuminate\Pagination\Environment::make($items, $total, $perPage);
	}

	/**
	 * Get the pagination view.
	 *
	 * @param \Illuminate\Pagination\Paginator $paginator
	 * @param string $view
	 * @return \Illuminate\View\View
	 * @static
	 */
	public static function getPaginationView($paginator, $view = null){
		return \Illuminate\Pagination\Environment::getPaginationView($paginator, $view);
	}

	/**
	 * Get the number of the current page.
	 *
	 * @return int
	 * @static
	 */
	public static function getCurrentPage(){
		return \Illuminate\Pagination\Environment::getCurrentPage();
	}

	/**
	 * Set the number of the current page.
	 *
	 * @param int $number
	 * @return void
	 * @static
	 */
	public static function setCurrentPage($number){
		\Illuminate\Pagination\Environment::setCurrentPage($number);
	}

	/**
	 * Get the root URL for the request.
	 *
	 * @return string
	 * @static
	 */
	public static function getCurrentUrl(){
		return \Illuminate\Pagination\Environment::getCurrentUrl();
	}

	/**
	 * Set the base URL in use by the paginator.
	 *
	 * @param string $baseUrl
	 * @return void
	 * @static
	 */
	public static function setBaseUrl($baseUrl){
		\Illuminate\Pagination\Environment::setBaseUrl($baseUrl);
	}

	/**
	 * Set the input page parameter name used by the paginator.
	 *
	 * @param string $pageName
	 * @return void
	 * @static
	 */
	public static function setPageName($pageName){
		\Illuminate\Pagination\Environment::setPageName($pageName);
	}

	/**
	 * Get the input page parameter name used by the paginator.
	 *
	 * @return string
	 * @static
	 */
	public static function getPageName(){
		return \Illuminate\Pagination\Environment::getPageName();
	}

	/**
	 * Get the name of the pagination view.
	 *
	 * @param string $view
	 * @return string
	 * @static
	 */
	public static function getViewName($view = null){
		return \Illuminate\Pagination\Environment::getViewName($view);
	}

	/**
	 * Set the name of the pagination view.
	 *
	 * @param string $viewName
	 * @return void
	 * @static
	 */
	public static function setViewName($viewName){
		\Illuminate\Pagination\Environment::setViewName($viewName);
	}

	/**
	 * Get the locale of the paginator.
	 *
	 * @return string
	 * @static
	 */
	public static function getLocale(){
		return \Illuminate\Pagination\Environment::getLocale();
	}

	/**
	 * Set the locale of the paginator.
	 *
	 * @param string $locale
	 * @return void
	 * @static
	 */
	public static function setLocale($locale){
		\Illuminate\Pagination\Environment::setLocale($locale);
	}

	/**
	 * Get the active request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static
	 */
	public static function getRequest(){
		return \Illuminate\Pagination\Environment::getRequest();
	}

	/**
	 * Set the active request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @return void
	 * @static
	 */
	public static function setRequest($request){
		\Illuminate\Pagination\Environment::setRequest($request);
	}

	/**
	 * Get the current view driver.
	 *
	 * @return \Illuminate\View\Environment
	 * @static
	 */
	public static function getViewDriver(){
		return \Illuminate\Pagination\Environment::getViewDriver();
	}

	/**
	 * Set the current view driver.
	 *
	 * @param \Illuminate\View\Environment $view
	 * @return void
	 * @static
	 */
	public static function setViewDriver($view){
		\Illuminate\Pagination\Environment::setViewDriver($view);
	}

	/**
	 * Get the translator instance.
	 *
	 * @return \Symfony\Component\Translation\TranslatorInterface
	 * @static
	 */
	public static function getTranslator(){
		return \Illuminate\Pagination\Environment::getTranslator();
	}

}