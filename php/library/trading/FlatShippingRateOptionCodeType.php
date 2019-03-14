<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class FlatShippingRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_ChargeAmountForEachAdditionalItem = 'ChargeAmountForEachAdditionalItem';
	const CodeType_DeductAmountFromEachAdditionalItem = 'DeductAmountFromEachAdditionalItem';
	const CodeType_ShipAdditionalItemsFree = 'ShipAdditionalItemsFree';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FlatShippingRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FlatShippingRateOptionCodeType = new FlatShippingRateOptionCodeType();
?>