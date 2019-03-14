<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class CalculatedShippingRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_CombinedItemWeight = 'CombinedItemWeight';
	const CodeType_IndividualItemWeight = 'IndividualItemWeight';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CalculatedShippingRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CalculatedShippingRateOptionCodeType = new CalculatedShippingRateOptionCodeType();
?>