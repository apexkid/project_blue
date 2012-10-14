<?php

Class PasswordHasher
{
	public static function Hash($input, $withPrefix = true)
	{
		if( $withprefix)
			$hashed_input = sha1(HASH_PREFIX . $input);
		else
			$hashed_input = sha1($input);
			
		return $hashed_input;
	}
}
?>
		