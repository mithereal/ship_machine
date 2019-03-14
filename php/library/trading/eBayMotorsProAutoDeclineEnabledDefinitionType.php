<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>eBayMotorsProAutoAcceptEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container if <code>eBayMotorsProAutoDeclineEnabled</code> is used as a <b>FeatureID</b> value in the request, or if no <b>FeatureID</b> values are used in the request. This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for eBay Motors Classified Ad listings. Only eBay Motors Pro users are eligible to use eBay Motors Classified Ad listings.
  * <br/><br/>
  * To verify if a specific eBay site supports the Best Offer Auto-Decline feature for eBay Motors Classified Ad listings (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.eBayMotorsProAutoDeclineEnabled</b> field.
  * <br/><br/>
  * To verify if a specific category on a specific eBay site supports the Best Offer Auto-Decline feature for eBay Motors Classified Ad listings, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>eBayMotorsProAutoDeclineEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
  * 
 **/

class eBayMotorsProAutoDeclineEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('eBayMotorsProAutoDeclineEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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
