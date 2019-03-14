<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>BestOfferAutoDeclineEnabled</b> field that is
  * returned under the <b>FeatureDefinitions</b> container of the
  * <b>GetCategoryFeatures</b> response (as long as
  * <code>BestOfferAutoDeclineEnabled</code> or <code>BestOfferAutoAcceptEnabled</code> is included as a <b>FeatureID</b> value in
  * the call request or no <b>FeatureID</b> values are passed into the call
  * request). This field is returned as an
  * empty element (a boolean value is not returned) if one or more eBay API-enabled sites
  * support the Best Offer Auto Decline feature.
  * <br/><br/>
  * To verify if a specific eBay site supports the Best Offer Auto Decline feature (for most
  * categories), look for a <code>true</code> value in the
  * <b>SiteDefaults.BestOfferAutoDeclineEnabled</b> field.
  * <br/><br/>
  * To verify if a specific category on a specific eBay site supports the Best Offer Auto Decline feature, pass in a <b>CategoryID</b> value in the request, and then
  * look for a <code>true</code> value in the <b>BestOfferAutoDeclineEnabled</b> field
  * of the corresponding Category node (match up the <b>CategoryID</b> values
  * if more than one Category IDs were passed in the request).
  * 
 **/

class BestOfferAutoDeclineEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BestOfferAutoDeclineEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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
