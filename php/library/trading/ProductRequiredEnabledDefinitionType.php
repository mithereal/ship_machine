<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>ProductRequiredEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as <b>ProductRequiredEnabled</b> is included as a <a href="types/FeatureIDCodeType.html">FeatureID</a> value in the call request or no <b>FeatureID</b> values are passed into the call request). The <b>ProductRequiredEnabled</b> field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Product-Based Shopping Experience.
  * <br><br>
  * To verify if a specific eBay site supports Product-Based Shopping Experience, look for a <code>Enabled</code> value in the <b>SiteDefaults.ProductRequiredEnabled</b> field.
  * <br><br>
  * To verify if a specific category on a specific eBay site requires listings to be associated with an eBay Catalog product, pass in a <b>ProductRequiredEnabled</b> value in the request, and then look for a <code>Enabled</code> value in the <b>ProductRequiredEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one category ID was passed in the request).
  * 
 **/

class ProductRequiredEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductRequiredEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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
