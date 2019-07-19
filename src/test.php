<?php
/**
 * Created by PhpStorm.
 * User: luochanggui
 * Date: 2019-07-19
 * Time: 10:46
 */

namespace luochanggui\test_composer;

class test
{

	public function __construct()
	{
		if (!function_exists('array_key_first')) {
			function array_key_first($arr) {
				foreach($arr as $key => $unused) {
					return $key;
				}
				return NULL;
			}
		}
	}

	static function get_array_first_key(array $arr)
	{
		return array_key_first($arr);
	}


}