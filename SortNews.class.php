<?php

/**
 * Multi Badges
 *
 * @author  emanuele
 * @license BSD http://opensource.org/licenses/BSD-3-Clause
 *
 * @version 0.0.1
 */

class SortNews
{
	/**
	 * The instance of the class
	 * @var SortNews
	 */
	private static $_instance = null;

	/**
	 */
	public static function addSortable($listOptions)
	{
		loadJavascriptFile('SortNews.js');
		loadCSSFile('SortNews.css');
	}

	/**
	 * This class is a singletone, but I'm not yet sure why I did it that way...
	 * Probably just because it was funny.
	 */
	public static function instance()
	{
		if (self::$_instance === null)
			self::$_instance = new SortNews();

		return self::$_instance;
	}
}