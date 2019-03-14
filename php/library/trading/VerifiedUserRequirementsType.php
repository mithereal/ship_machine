<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_ComplexType.php';

/**
  * The Verified User Buyer Requirement has been deprecated, so this type is no longer applicable.
  * 
  * 
 **/

class VerifiedUserRequirementsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $VerifiedUser;

	/**
	* @var int
	**/
	protected $MinimumFeedbackScore;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VerifiedUserRequirementsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'VerifiedUser' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinimumFeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return boolean
	 **/
	function getVerifiedUser()
	{
		return $this->VerifiedUser;
	}

	/**
	 * @return void
	 **/
	function setVerifiedUser($value)
	{
		$this->VerifiedUser = $value;
	}

	/**
	 * @return int
	 **/
	function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
	}

	/**
	 * @return void
	 **/
	function setMinimumFeedbackScore($value)
	{
		$this->MinimumFeedbackScore = $value;
	}

}
?>
