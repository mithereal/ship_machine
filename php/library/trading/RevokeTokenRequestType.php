<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'AbstractRequestType.php';

/**
  * Revokes a token before it would otherwise expire.
  * 
 **/

class RevokeTokenRequestType extends AbstractRequestType
{
	/**
	* @var boolean
	**/
	protected $UnsubscribeNotification;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RevokeTokenRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'UnsubscribeNotification' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	function getUnsubscribeNotification()
	{
		return $this->UnsubscribeNotification;
	}

	/**
	 * @return void
	 **/
	function setUnsubscribeNotification($value)
	{
		$this->UnsubscribeNotification = $value;
	}

}
?>
