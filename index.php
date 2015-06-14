<?php
require_once './ChainArray.php';

$chainArray = new ChainArray();

$array = array(
				0 => 'нуль',
				'b' =>'be',
				'c' =>array(
					'c1' =>'ce1',
					'c2' =>array(
						'c21' =>'ce21',
						)
					)
				);

$key_str = 'c/c2';

$return = $chainArray->returnValue($array, $key_str, '/','bla');
echo '<pre>';
print_r($return);
echo '</pre>';




?>