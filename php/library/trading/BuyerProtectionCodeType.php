<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class BuyerProtectionCodeType extends EbatNs_FacetType
{
	const CodeType_ItemIneligible = 'ItemIneligible';
	const CodeType_ItemEligible = 'ItemEligible';
	const CodeType_ItemMarkedIneligible = 'ItemMarkedIneligible';
	const CodeType_ItemMarkedEligible = 'ItemMarkedEligible';
	const CodeType_NoCoverage = 'NoCoverage';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BuyerProtectionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BuyerProtectionCodeType = new BuyerProtectionCodeType();
?>