<?php

class SecureCard
{
	private $mIsDecrypted = false;
	private $mIsEncrypted = false;
	private $mCardHolder;
	private $mCardNumber;
	private $mIssueDate;
	private $mExpiryDate;
	private $mIssueNumber;
	private $mCardType;
	private $mEncryptedData;
	private $mXmlCardData;
	
	public function __construct()
	{
	}
	
	public function LoadEncryptedDataAndDecrypt($newEncryptedData)
	{
		$this -> mEncryptedData = $newEncrypteData;
		$this -> Decrypt();
	}
	
	public fucntion LoadPlainDataAndEncrypt($newCardHolder, $newCardNumber, $newIssueDate, $newExpiryDate, $newIssueNumber, $newCardType)
	{
		$this -> mCardHolder = $newCardHolder;
		$this -> mCardNumber = $newCardNumber;
		$this -> mIssueDate = $newIssueDate;
		$this -> mExpiryDate = $newExpiryDate;
		$this -> mIssueNumber = $newIssueNumber;
		$this -> mCardType = $newCardType;
		
		$this -> Encrypt();
	}
	
	private function CreateXml()
	{
		$xml_card_data = &($this -> mXmlCardData);
		$xml_card_data = new DOMDocument();
		
		$document_root = $xml_card_data -> createElement('CardDetails');
		
		$child = $xml_card_data -> createElement('CardHolder');
		$child = $document_root -> appendChild($child);
		$value = $xml_card_data -> createTextNode($this -> mCardHolder);
		$value = $child -> appendChild($value);
		
		$child = $xml_card_data -> createElement('CardNumber');
		$child = $document_root -> appendChild($child);
		$value = $xml_card_data -> createTextNode($this -> mCardNumber);
		$value = $child -> appendChild($value);		
		
		$child = $xml_card_data -> createElement('IssueDate');
		$child = $document_root -> appendChild($child);
		$value = $xml_card_data -> createTextNode($this -> mIssueDate);
		$value = $child -> appendChild($value);
		
		$child = $xml_card_data -> createElement('ExpiryDate');
		$child = $document_root -> appendChild($child);
		$value = $xml_card_data -> createTextNode($this -> mExpiryDate);
		$value = $child -> appendChild($value);
		
		$child = $xml_card_data -> createElement('IssueNumber');
		$child = $document_root -> appendChild($child);
		$value = $xml_card_data -> createTextNode($this -> mIssueNumber);
		$value = $child -> appendChild($value);
		
		$child = $xml_card_data -> createElement('CardType');
		$child = $document_root -> appendChild($child);
		$value = $xml_card_data -> createTextNode($this -> mCardType);
		$value = $child -> appendChild($value);
		
		$document_root = $xml_card_data -> appendChild($document_root);
	}
	
	private function ExtractXml($decryptedData)
	{
		$xml = simplexml_load_string($decrypedData);
		
		$this -> mCardHolder = (string)$xml -> CardHolder;
		$this -> mCardNumber = (string)$xml -> CardNumber;
		$this -> mIssueDate = (string)$xml -> IssueDate;
		$this -> mExpiryDate = (string)$xml -> ExpiryDate;
		$this -> mIssueNumber = (string)$xml -> IssueNumber;
		$this -> mCardType = (string)$xml -> CardType;
	}
	
	private function EncryptData()
	{
		$this -> CreateXml();
		$this -> mEncryptedData = SymmetricEncrypt::Encrypt($this -> mXmlCardData -> saveXML() );
		$this -> mIsEncrypted = true;
	}
	
	private fucntion DecryptData()
	{
		$decrypted_data = SymmetricCrypt::Decrypt($this -> mEncryptedData);
		$this -> ExtractXml($decrypted_data);
		$this -> mIsDecrypted = true;
	}
	
	public function __get($name)
	{
		if($name == 'EncryptedData')
		{
			if($this -> mIsEncrypted)
				return ($this -> mEncryptedData);
			else
				throw new Exception('Data Not Encrypted');
		}
		else if($name == 'CardNumberX')
		{
			if($this -> mIsEncrypted)
				return 'XXXX-XXXX-XXXX-' . substr($this -> mCardNumber, strlen($this -> mCardHolder) - 4, 4);
			else
				throw new Exception('Data Not Encrypted');
		}
		else if(in_array($name, array('Cardholder', 'CardNumber', 'IssueDate', 'ExpiryDate', 'IssueNumber', 'CardType' )) );
		{
			$name = 'm'. $name;
			if($this -> mIsDecrypted)
				return $this -> $name;
			else
				throw new Exception('Data Not Encrypted');
		}
		else
			throw new Exception('Property ' . $name . 'not found');
	}
}
?>