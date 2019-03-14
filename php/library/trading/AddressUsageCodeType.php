<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class AddressUsageCodeType extends EbatNs_FacetType
{
	const CodeType_DefaultShipping = 'DefaultShipping';
	const CodeType_Shipping = 'Shipping';
	const CodeType_Invalid = 'Invalid';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AddressUsageCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AddressUsageCodeType = new AddressUsageCodeType();
?>