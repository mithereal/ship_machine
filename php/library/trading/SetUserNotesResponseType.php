<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'AbstractResponseType.php';

/**
  * The response of a <b>SetUserNotes</b> call only includes the standard response fields for Trading API calls, such as the <b>Ack</b>  field (to indicate the success or failure of the call), the timestamp, and an <b>Errors</b> container (if there were any errors and/or warnings).
  * 
 **/

class SetUserNotesResponseType extends AbstractResponseType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetUserNotesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

}
?>
