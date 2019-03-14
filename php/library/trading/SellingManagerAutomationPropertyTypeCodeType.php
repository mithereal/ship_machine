<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SellingManagerAutomationPropertyTypeCodeType extends EbatNs_FacetType
{
	const CodeType_ItemListFailedAutomationRules = 'ItemListFailedAutomationRules';
	const CodeType_ItemRelistFailedAutomationRules = 'ItemRelistFailedAutomationRules';
	const CodeType_ItemListFailedSecondChanceOfferAutoRules = 'ItemListFailedSecondChanceOfferAutoRules';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerAutomationPropertyTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerAutomationPropertyTypeCodeType = new SellingManagerAutomationPropertyTypeCodeType();
?>