<?php

Class SymmetricCrypt
{
	private static $msSecretKey = 'This is my cool secret key'; //secretkey used to encrypt
	private static $msHexaIv = 'c871ba4a401eee211313aaaabbbbcccc'; //Intialization vector in hexadecimal 32 char.
	private static $mCipherAlgorithm = MCRYPT_RIJNDAEL_128; //Using Rijndael encryption algo.
	
	public static function Encrypt($plaintext)
	{
		$binary_iv = pack('H*', self::$msHexaIv);
		$binary_encryped_string = mcrypt_encrypt(self::$mCipherAlgorithm, self::$msSecretKey, $plaintext, MCRYPT_MODE_CBC, $binary_iv);
		$hexa_excryped_string = bin2hex($binary_encryped_string);
		
		return $hexa_encryped_string;
	}
	
	public static function Decrypt($encrypedString)
	{
		$binary_iv = pack('H*', self::$msHexaIv);
		$binary_encryped_string = pack('H*', self::$encrypedString);
		$decryped_string = mcrypt_decrypt(self::$mCipherAlgorithm, self::$msSecretKey, $binary_encryped_string, MCRYPT_MODE_CBC, $binary_iv);
		
		return $decryped_string;
	}
}
?>
	