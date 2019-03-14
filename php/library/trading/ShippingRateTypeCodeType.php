<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class ShippingRateTypeCodeType extends EbatNs_FacetType
{
	const CodeType_OnDemand = 'OnDemand';
	const CodeType_DailyPickup = 'DailyPickup';
	const CodeType_StandardList = 'StandardList';
	const CodeType_Counter = 'Counter';
	const CodeType_Discounted = 'Discounted';
	const CodeType_CommercialPlus = 'CommercialPlus';
	const CodeType_GoldSilver = 'GoldSilver';
	const CodeType_PlatTitanium = 'PlatTitanium';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShippingRateTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShippingRateTypeCodeType = new ShippingRateTypeCodeType();
?>