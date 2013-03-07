<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('isSelected'))
{
	function isSelected($pp, $key, $default, $current, $isArray = FALSE) {
	    $value = (isset($pp[$key]) && !empty($pp[$key])) ?
	        $pp[$key] : 
	        ( (!$isArray || is_array($default)) ? $default : array($default));
	    if( ($isArray && in_array($current, $value)) || (!$isArray && $current == $value)) {
	        return TRUE;
	    }
	    return FALSE;
	}
}