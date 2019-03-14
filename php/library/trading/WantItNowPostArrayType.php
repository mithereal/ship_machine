<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_ComplexType.php';
require_once 'WantItNowPostType.php';

/**
  * This type is deprecated.
  * 
 **/

class WantItNowPostArrayType extends EbatNs_ComplexType
{
	/**
	* @var WantItNowPostType
	**/
	protected $WantItNowPost;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('WantItNowPostArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'WantItNowPost' =>
				array(
					'required' => false,
					'type' => 'WantItNowPostType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return WantItNowPostType
	 * @param integer $index 
	 **/
	function getWantItNowPost($index = null)
	{
		if ($index !== null)
		{
			return $this->WantItNowPost[$index];
		}
		else
		{
			return $this->WantItNowPost;
		}
	}

	/**
	 * @return void
	 * @param WantItNowPostType $value
	 * @param integer $index 
	 **/
	function setWantItNowPost($value, $index = null)
	{
		if ($index !== null)
		{
			$this->WantItNowPost[$index] = $value;
		}
		else
		{
			$this->WantItNowPost= $value;
		}
	}

	/**
	 * @return void
	 * @param WantItNowPostType $value
	 **/
	function addWantItNowPost($value)
	{
		$this->WantItNowPost[] = $value;
	}

}
?>
