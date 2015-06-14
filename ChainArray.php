<?php

class ChainArray
{

	function returnValue($array, $key_str, $delimiter, $my_return = false)
	{
		while ($key_pre_arr = $this->returnKeyWithTail($key_str, $delimiter)){
			if(empty($key_pre_arr[0])){
				break;
			}
			if(is_array($array) &&  array_key_exists($key_pre_arr[0], $array)){
				$key_str = $key_pre_arr[1];
				$array = $array[$key_pre_arr[0]];
			}
			else{
				return $my_return ? $my_return : null ;
			}
		}
		return $array;
	}

	function returnKeyWithTail($key_str, $delimiter)
	{
		return explode($delimiter,$key_str,2);
	}
}

?>